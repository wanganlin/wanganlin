package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	DeliveryQueryReq struct {
		g.Meta `path:"/delivery" tags:"模块" method:"post" summary:""`
	}

	DeliveryQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
