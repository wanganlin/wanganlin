package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	CaptchaReq struct {
		g.Meta `path:"/" tags:"公共模块" method:"post" summary:""`
	}

	CaptchaRes struct {
		g.Meta `mime:"application/json"`
	}
)
