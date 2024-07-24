package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	OrderReq struct {
		g.Meta `path:"/profile" tags:"模块" method:"post" summary:"更新信息"`
	}

	OrderRes struct {
		g.Meta `mime:"application/json"`
	}
)
