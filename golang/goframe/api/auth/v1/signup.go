package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	SignupEmailReq struct {
		g.Meta   `path:"/signup/email" tags:"认证模块" method:"post" summary:"通过邮箱登录"`
		Email    string `v:"required|email"`
		Password string `v:"required|password"`
	}

	SignupEmailRes struct {
		g.Meta `mime:"application/json"`
		Token  string `v:"required|token"`
	}
)

type (
	SignupSmsCodeReq struct {
		g.Meta  `path:"/signup/smsCode" tags:"认证模块" method:"post" summary:"通过短信验证码登录"`
		Mobile  string `v:"required|mobile"`
		SmsCode string `v:"required|smsCode"`
	}

	SignupSmsCodeRes struct {
		g.Meta `mime:"application/json"`
		Token  string `v:"required|token"`
	}
)
