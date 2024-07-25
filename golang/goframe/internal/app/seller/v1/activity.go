package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	ActivityQueryReq struct {
		g.Meta `path:"/activity" tags:"模块" method:"post" summary:""`
	}

	ActivityQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
