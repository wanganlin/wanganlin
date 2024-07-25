package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	SmsSendReq struct {
		g.Meta `path:"/" tags:"公共模块" method:"post" summary:""`
	}

	SmsSendRes struct {
		g.Meta `mime:"application/json"`
	}
)
