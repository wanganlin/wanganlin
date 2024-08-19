// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package common

import (
	"context"

	"gomall/internal/api/common/v1"
)

type ICommonV1 interface {
	Captcha(ctx context.Context, req *v1.CaptchaReq) (res *v1.CaptchaRes, err error)
	SmsSend(ctx context.Context, req *v1.SmsSendReq) (res *v1.SmsSendRes, err error)
}
