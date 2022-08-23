package console

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type cAuth struct{}

var Auth = cAuth{}

// Login 登录
func (a *cAuth) Login(r *ghttp.Request) {
	err := r.Response.WriteTpl("console/auth_login.html")
	if err != nil {
		return
	}
}

// Forgot 忘记密码
func (a *cAuth) Forgot(r *ghttp.Request) {
	err := r.Response.WriteTpl("console/auth_forgot.html")
	if err != nil {
		return
	}
}

// Reset 重置密码
func (a *cAuth) Reset(r *ghttp.Request) {
	err := r.Response.WriteTpl("console/auth_reset.html")
	if err != nil {
		return
	}
}
