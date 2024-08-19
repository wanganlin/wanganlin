// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package common

import (
	"context"
	v2 "gomall/api/common/v1"
)

type ICommonV1 interface {
	Captcha(ctx context.Context, req *v2.CaptchaReq) (res *v2.CaptchaRes, err error)
	SmsSend(ctx context.Context, req *v2.SmsSendReq) (res *v2.SmsSendRes, err error)
}
