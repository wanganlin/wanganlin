package console

import (
	"github.com/gogf/gf/v2/frame/g"
)

type HelloReq struct {
	g.Meta `path:"/" tags:"Console" method:"get" summary:"You admin console."`
}
type HelloRes struct {
	g.Meta `mime:"text/html" example:"string"`
}
