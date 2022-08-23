package console

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"
)

type cAuth struct{}

var Auth = cAuth{}

type LoginReq struct {
	g.Meta `path:"/login" method:"get"`
}
type LoginRes struct{}

// Login 登录
func (a *cAuth) Login(ctx context.Context, r *LoginReq) (res *LoginRes, err error) {
	err = g.RequestFromCtx(ctx).Response.WriteTpl("console/auth_login.html")
	return
}

type ForgotReq struct {
	g.Meta `path:"/forgot" method:"get"`
}
type ForgotRes struct{}

// Forgot 忘记密码
func (a *cAuth) Forgot(ctx context.Context, r *ForgotReq) (res *ForgotRes, err error) {
	err = g.RequestFromCtx(ctx).Response.WriteTpl("console/auth_forgot.html")
	return
}

type ResetReq struct {
	g.Meta `path:"/reset" method:"get"`
}
type ResetRes struct{}

// Reset 重置密码
func (a *cAuth) Reset(ctx context.Context, r *ResetReq) (res *ResetRes, err error) {
	err = g.RequestFromCtx(ctx).Response.WriteTpl("console/auth_reset.html")
	return
}
