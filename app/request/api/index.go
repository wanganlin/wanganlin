package api

import (
	"github.com/gogf/gf/v2/frame/g"
)

type HelloReq struct {
	g.Meta `path:"/" tags:"Api" method:"get" summary:"You first hello api"`
}
type HelloRes struct {
	g.Meta `mime:"application/json" example:"string"`
}
