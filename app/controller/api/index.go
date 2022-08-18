package api

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"

	"github.com/wanganlin/goframe/app/request/api"
)

var (
	Index = cIndex{}
)

type cIndex struct{}

func (a *cIndex) Index(ctx context.Context, req *api.HelloReq) (res *api.HelloRes, err error) {
	g.RequestFromCtx(ctx).Response.Writeln("Hello API!")
	return
}
