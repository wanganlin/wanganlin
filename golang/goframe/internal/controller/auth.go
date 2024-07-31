package controller

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

func (c *index) Login(r *ghttp.Request) {
	err := r.Response.WriteTpl("auth_login.html")
	if err != nil {
		panic(err)
	}
}

func (c *index) Signup(r *ghttp.Request) {
	err := r.Response.WriteTpl("auth_signup.html")
	if err != nil {
		panic(err)
	}
}
