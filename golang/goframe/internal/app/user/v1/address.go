package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	AddressQueryReq struct {
		g.Meta `path:"/address" tags:"模块" method:"post" summary:""`
	}

	AddressQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
