package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	SignupEmailReq struct {
		g.Meta   `path:"/signup/email" tags:"认证模块" method:"post" summary:"买家邮箱注册"`
		Email    string `v:"required|email#请输入邮箱地址|邮箱地址格式不正确"`
		Password string `v:"required|password#请输入登录密码|密码格式不正确"`
	}

	SignupEmailRes struct {
		g.Meta `mime:"application/json"`
		Token  string
	}
)

type (
	SignupSmsCodeReq struct {
		g.Meta  `path:"/signup/smsCode" tags:"认证模块" method:"post" summary:"买家短信验证码注册"`
		Mobile  string `v:"required|mobile"`
		SmsCode string `v:"required|smsCode"`
	}

	SignupSmsCodeRes struct {
		g.Meta `mime:"application/json"`
		Token  string
	}
)
