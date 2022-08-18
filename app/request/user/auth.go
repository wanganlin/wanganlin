package user

import (
	"github.com/gogf/gf/v2/frame/g"
)

type LoginReq struct {
	g.Meta `path:"/login" tags:"User" method:"get" summary:"You user console."`
}
type LoginRes struct {
	g.Meta `mime:"application/json" example:"string"`
}
