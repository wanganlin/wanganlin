package user

import (
	"context"

	"github.com/wanganlin/goframe/app/request/user"
)

type cAuth struct{}

var Auth = cAuth{}

// Login 登录
func (a *cAuth) Login(ctx context.Context, req *user.AuthLoginReq) (res *user.AuthLoginRes, err error) {
	return
}

// Register 注册
func (a *cAuth) Register(ctx context.Context, req *user.AuthRegisterReq) (res *user.AuthRegisterRes, err error) {
	return
}

// Forgot 忘记密码
func (a *cAuth) Forgot(ctx context.Context, req *user.AuthForgotReq) (res *user.AuthForgotRes, err error) {
	return
}

// Reset 重置密码
func (a *cAuth) Reset(ctx context.Context, req *user.AuthResetReq) (res *user.AuthResetRes, err error) {
	return
}
