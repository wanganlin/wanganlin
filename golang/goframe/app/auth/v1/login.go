package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	LoginEmailReq struct {
		g.Meta   `path:"/login/email" tags:"认证模块" security:"Brear" method:"post" summary:"通过邮箱登录"`
		Email    string `v:"required|email"`
		Password string `v:"required|password"`
	}

	LoginEmailRes struct {
		g.Meta `mime:"application/json"`
		Token  string `v:"required|token"`
	}
)

type (
	LoginSmsCodeReq struct {
		g.Meta  `path:"/login/smsCode" tags:"认证模块" method:"post" summary:"通过短信验证码登录"`
		Mobile  string `v:"required|mobile"`
		SmsCode string `v:"required|smsCode"`
	}

	LoginSmsCodeRes struct {
		g.Meta `mime:"application/json"`
		Token  string `v:"required|token"`
	}
)
