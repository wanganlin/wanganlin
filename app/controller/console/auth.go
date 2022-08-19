package console

import (
	"context"

	"github.com/wanganlin/goframe/app/request/console"
)

type cAuth struct{}

var Auth = cAuth{}

// Login 登录
func (a *cAuth) Login(ctx context.Context, req *console.AuthLoginReq) (res *console.AuthLoginRes, err error) {
	return
}

// Forgot 忘记密码
func (a *cAuth) Forgot(ctx context.Context, req *console.AuthForgotReq) (res *console.AuthForgotRes, err error) {
	return
}

// Reset 重置密码
func (a *cAuth) Reset(ctx context.Context, req *console.AuthResetReq) (res *console.AuthResetRes, err error) {
	return
}
