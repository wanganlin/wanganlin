package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	OrderQueryReq struct {
		g.Meta `path:"/order" tags:"卖家模块" method:"post" summary:""`
	}

	OrderQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
