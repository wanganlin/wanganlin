package console

import (
	"github.com/gogf/gf/v2/frame/g"
)

type UserListReq struct {
	g.Meta `path:"/user" tags:"Console" method:"get" summary:"You admin console."`
}
type UserListRes struct {
	g.Meta `mime:"application/json" example:"string"`
}
