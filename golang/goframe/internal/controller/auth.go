package controller

import (
	"gitee.com/gosoft/gomall/internal/response"
	"github.com/gogf/gf/v2/net/ghttp"
)

func (c *index) Login(r *ghttp.Request) {
	if r.IsAjaxRequest() {

		response.Ok(r.Context(), nil)
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
