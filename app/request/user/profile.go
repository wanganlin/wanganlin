package user

import (
	"github.com/gogf/gf/v2/frame/g"
)

type ProfileReq struct {
	g.Meta `path:"/profile" tags:"User" method:"get" summary:"You user dashboard."`
}
type ProfileRes struct {
	g.Meta `mime:"text/html" example:"string"`
}
