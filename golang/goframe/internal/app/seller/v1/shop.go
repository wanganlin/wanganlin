package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	ShopQueryReq struct {
		g.Meta `path:"/shop" tags:"模块" method:"post" summary:""`
	}

	ShopQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
