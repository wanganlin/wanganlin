package handler

import (
	"context"
	v1 "gitee.com/gosoft/gomall/internal/app/auth/api/login/v1"
	"gitee.com/gosoft/gomall/internal/exception"
	"gitee.com/gosoft/gomall/internal/response"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	loginHandler struct{}
)

var Login = &loginHandler{}

// Index 登录
func (a *loginHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("auth/login.html")
	if err != nil {
		return
	}
}

func (a *loginHandler) SmsCode(ctx context.Context, req *v1.SmsCodeReq) (res *v1.SmsCodeRes, err error) {
	var r = g.RequestFromCtx(ctx)
	if r.IsAjaxRequest() {
		response.Ok(r.Response, g.Map{"aa": "bb"})
	}

	response.Fail(r.Response, exception.NewError(1, "test"))
}
