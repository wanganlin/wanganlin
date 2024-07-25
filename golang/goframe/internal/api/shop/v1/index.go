package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	IndexReq struct {
		g.Meta `path:"/" tags:"店铺模块" method:"get" summary:""`
	}

	IndexRes struct {
		g.Meta `mime:"application/json"`
	}
)
