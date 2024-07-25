// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package auth

import (
	"context"

	"gitee.com/gosoft/gomall/internal/api/auth/v1"
)

type IAuthV1 interface {
	LoginEmail(ctx context.Context, req *v1.LoginEmailReq) (res *v1.LoginEmailRes, err error)
	LoginSmsCode(ctx context.Context, req *v1.LoginSmsCodeReq) (res *v1.LoginSmsCodeRes, err error)
	SignupEmail(ctx context.Context, req *v1.SignupEmailReq) (res *v1.SignupEmailRes, err error)
	SignupSmsCode(ctx context.Context, req *v1.SignupSmsCodeReq) (res *v1.SignupSmsCodeRes, err error)
}
