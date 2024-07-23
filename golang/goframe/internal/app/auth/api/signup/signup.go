// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package signup

import (
	"context"

	"gitee.com/gosoft/gomall/internal/app/auth/api/signup/v1"
)

type ISignupV1 interface {
	SmsCode(ctx context.Context, req *v1.SmsCodeReq) (res *v1.SmsCodeRes, err error)
}
