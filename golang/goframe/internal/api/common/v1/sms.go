package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	SmsSendReq struct {
		g.Meta `path:"/sms/send" tags:"公共模块" method:"post" summary:"发送短信验证码"`
	}

	SmsSendRes struct {
		g.Meta `mime:"application/json"`
	}
)
