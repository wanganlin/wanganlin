package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	FavoriteQueryReq struct {
		g.Meta `path:"/favorite" tags:"模块" method:"post" summary:""`
	}

	FavoriteQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
