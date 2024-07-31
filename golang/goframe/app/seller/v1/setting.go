package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	SettingReq struct {
		g.Meta `path:"/setting" tags:"卖家模块" method:"post" summary:""`
	}

	SettingRes struct {
		g.Meta `mime:"application/json"`
	}
)
