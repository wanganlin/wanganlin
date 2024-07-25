package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	ProductQueryReq struct {
		g.Meta `path:"/product" tags:"模块" method:"post" summary:""`
	}

	ProductQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
