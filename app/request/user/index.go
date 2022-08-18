package user

import (
	"github.com/gogf/gf/v2/frame/g"
)

type HelloReq struct {
	g.Meta `path:"/" tags:"User" method:"get" summary:"You user dashboard."`
}
type HelloRes struct {
	g.Meta `mime:"text/html" example:"string"`
}
