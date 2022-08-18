package console

import (
	"github.com/gogf/gf/v2/frame/g"
)

type LoginReq struct {
	g.Meta `path:"/login" tags:"Console" method:"get" summary:"You admin console."`
}
type LoginRes struct {
	g.Meta `mime:"application/json" example:"string"`
}
