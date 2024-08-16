package controller

import (
	"gitee.com/gosoft/gomall/internal/exception"
	"gitee.com/gosoft/gomall/internal/model"
	"gitee.com/gosoft/gomall/internal/response"
	"gitee.com/gosoft/gomall/internal/service"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/gogf/gf/v2/util/gvalid"
)

type (
	LoginReq struct {
		Passport string `p:"passport"  v:"required|length:6,30#请输入账号|账号长度为:{min}到:{max}位"`
		Password string `p:"password" v:"required|length:6,30#请输入密码|密码长度不够"`
		Remember bool   `p:"remember"`
	}

	LoginRes struct {
		Status bool `json:"status"`
	}
)

func (c *index) Login(r *ghttp.Request) {
	if r.IsAjaxRequest() {
		var req *LoginReq
		if err := r.Parse(&req); err != nil {
			// Validation error.
			if v, ok := err.(gvalid.Error); ok {
				response.Fail(r.Context(), exception.Exception{
					Code:    1,
					Message: v.FirstError().Error(),
				})
				return
			}

			response.Fail(r.Context(), exception.Exception{
				Code:    1,
				Message: err.Error(),
			})
			return
		}

		loginInput := model.UserLogin{
			Passport: "",
			Password: "",
			Remember: false,
		}

		user, err := service.UserAuth().Login(r.Context(), loginInput)
		if err != nil {
			response.Fail(r.Context(), exception.Exception{
				Code:    1,
				Message: err.Error(),
			})
			return
		}

		err = service.UserAuth().Session(r.Context(), user, req.Remember)
		if err != nil {
			response.Fail(r.Context(), exception.Exception{
				Code:    1,
				Message: err.Error(),
			})
			return
		}

		response.Ok(r.Context(), nil)
	}

	if ok, err := service.UserAuth().IsLogin(r.Context()); err != nil || ok {
		r.Response.RedirectBack()
	}

	err := r.Response.WriteTpl("auth/login.html")
	if err != nil {
		panic(err)
	}
}

func (c *index) Signup(r *ghttp.Request) {

	err := r.Response.WriteTpl("auth/signup.html")
	if err != nil {
		panic(err)
	}
}
