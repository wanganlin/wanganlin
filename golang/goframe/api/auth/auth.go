// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package auth

import (
	"context"
	v2 "gomall/api/auth/v1"
)

type IAuthV1 interface {
	ForgotEmail(ctx context.Context, req *v2.ForgotEmailReq) (res *v2.ForgotEmailRes, err error)
	ForgotSmsCode(ctx context.Context, req *v2.ForgotSmsCodeReq) (res *v2.ForgotSmsCodeRes, err error)
	LoginEmail(ctx context.Context, req *v2.LoginEmailReq) (res *v2.LoginEmailRes, err error)
	LoginSmsCode(ctx context.Context, req *v2.LoginSmsCodeReq) (res *v2.LoginSmsCodeRes, err error)
	Reset(ctx context.Context, req *v2.ResetReq) (res *v2.ResetRes, err error)
	SignupEmail(ctx context.Context, req *v2.SignupEmailReq) (res *v2.SignupEmailRes, err error)
	SignupSmsCode(ctx context.Context, req *v2.SignupSmsCodeReq) (res *v2.SignupSmsCodeRes, err error)
}
