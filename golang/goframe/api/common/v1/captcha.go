package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	CaptchaReq struct {
		g.Meta `path:"/captcha" tags:"公共模块" method:"get" summary:"获取图片验证码"`
	}

	CaptchaRes struct {
		g.Meta `mime:"application/json"`
		Id     string `json:"id"`
		Base64 string `json:"base64"`
	}
)
