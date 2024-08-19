package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	InviteQueryReq struct {
		g.Meta `path:"/invite" tags:"买家模块" method:"post" summary:""`
	}

	InviteQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
