package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	UserQueryReq struct {
		g.Meta `path:"/user" tags:"运营模块" method:"post" summary:""`
	}

	UserQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
