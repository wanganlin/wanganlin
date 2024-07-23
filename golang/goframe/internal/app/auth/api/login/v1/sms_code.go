package v1

import "github.com/gogf/gf/v2/frame/g"

type SmsCodeReq struct {
	g.Meta  `path:"/auth/api/login/v1/sms-code" tags:"认证模块" method:"post" summary:"发送短信验证码"`
	Mobile  string `v:"required|mobile"`
	SmsCode string `v:"required|smsCode"`
}

type SmsCodeRes struct {
	g.Meta `mime:"application/json"`
	Token  string `v:"required|token"`
}
