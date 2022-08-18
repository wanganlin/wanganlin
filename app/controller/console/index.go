package console

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"

	"github.com/wanganlin/goframe/app/request/console"
)

var (
	Index = cIndex{}
)

type cIndex struct{}

func (a *cIndex) Index(ctx context.Context, req *console.HelloReq) (res *console.HelloRes, err error) {
	g.RequestFromCtx(ctx).Response.WriteTpl("admin/index.html")
	return
}
