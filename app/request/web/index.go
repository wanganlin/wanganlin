package web

import (
	"github.com/gogf/gf/v2/frame/g"
)

type HelloReq struct {
	g.Meta `path:"/" tags:"Home" method:"get" summary:"You home page"`
}
type HelloRes struct {
	g.Meta `mime:"text/html" example:"string"`
}
