package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	FinanceQueryReq struct {
		g.Meta `path:"/finance" tags:"模块" method:"post" summary:""`
	}

	FinanceQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
