package controller

import (
	"errors"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/gogf/gf/v2/util/gvalid"
	"gomall/internal/exception"
	"gomall/internal/model"
	"gomall/internal/response"
	"gomall/internal/service"
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
			var v gvalid.Error
			if errors.As(err, &v) {
				response.Fail(r.Context(), exception.Exception{
					Code:    1,
					Message: v.FirstError().Error(),
				})
			}

			response.Fail(r.Context(), exception.Exception{
				Code:    1,
				Message: err.Error(),
			})
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
		}

		err = service.UserAuth().Session(r.Context(), user, req.Remember)
		if err != nil {
			response.Fail(r.Context(), exception.Exception{
				Code:    1,
				Message: err.Error(),
			})
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
