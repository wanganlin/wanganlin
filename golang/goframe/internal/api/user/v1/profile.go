package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	ProfileReq struct {
		g.Meta `path:"/profile" tags:"买家模块" method:"get" summary:"更新会员信息"`
		Name   string `v:"required|name"`
		Avatar string `v:"required|avatar"`
	}

	ProfileRes struct {
		g.Meta `mime:"application/json"`
		Result bool `v:"required|result"`
	}
)
