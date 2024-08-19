// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package auth

import (
	"context"

	"gomall/internal/api/auth/v1"
)

type IAuthV1 interface {
	ForgotEmail(ctx context.Context, req *v1.ForgotEmailReq) (res *v1.ForgotEmailRes, err error)
	ForgotSmsCode(ctx context.Context, req *v1.ForgotSmsCodeReq) (res *v1.ForgotSmsCodeRes, err error)
	LoginEmail(ctx context.Context, req *v1.LoginEmailReq) (res *v1.LoginEmailRes, err error)
	LoginSmsCode(ctx context.Context, req *v1.LoginSmsCodeReq) (res *v1.LoginSmsCodeRes, err error)
	Reset(ctx context.Context, req *v1.ResetReq) (res *v1.ResetRes, err error)
	SignupEmail(ctx context.Context, req *v1.SignupEmailReq) (res *v1.SignupEmailRes, err error)
	SignupSmsCode(ctx context.Context, req *v1.SignupSmsCodeReq) (res *v1.SignupSmsCodeRes, err error)
}
