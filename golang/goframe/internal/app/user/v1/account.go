package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	AccountQueryReq struct {
		g.Meta `path:"/account" tags:"模块" method:"post" summary:""`
	}

	AccountQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
