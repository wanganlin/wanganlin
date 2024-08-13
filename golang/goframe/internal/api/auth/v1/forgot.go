package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	ForgotEmailReq struct {
		g.Meta `path:"/forgot/email" tags:"认证模块" method:"post" summary:"通过邮箱找回"`
		Email  string `v:"required|email#请输入邮箱地址|邮箱地址格式不正确"`
	}

	ForgotEmailRes struct {
		g.Meta     `mime:"application/json"`
		ResetToken string
	}
)

type (
	ForgotSmsCodeReq struct {
		g.Meta  `path:"/forgot/smsCode" tags:"认证模块" method:"post" summary:"通过短信验证码找回"`
		Mobile  string `v:"required|mobile"`
		SmsCode string `v:"required|smsCode"`
	}

	ForgotSmsCodeRes struct {
		g.Meta     `mime:"application/json"`
		ResetToken string
	}
)
