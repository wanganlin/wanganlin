package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	StoreQueryReq struct {
		g.Meta `path:"/store" tags:"卖家模块" method:"post" summary:""`
	}

	StoreQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
