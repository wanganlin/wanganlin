package api

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"
	"github.com/wanganlin/goframe/app/request/api"
)

type cIndex struct{}

var Index = cIndex{}

func (a *cIndex) Index(ctx context.Context, req *api.HelloReq) (res *api.HelloRes, err error) {
	g.RequestFromCtx(ctx).Response.WriteJsonExit(g.Map{"haha": "hehe"})
	return
}
