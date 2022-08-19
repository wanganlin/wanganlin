package console

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/os/gfile"
	"github.com/wanganlin/goframe/app/request/console"
)

var (
	Index = cIndex{}
)

type cIndex struct{}

func (a *cIndex) Index(ctx context.Context, req *console.HelloReq) (res *console.HelloRes, err error) {
	content := gfile.GetContents("public/static/admin/index.html")
	g.RequestFromCtx(ctx).Response.WriteTplContent(content)
	return
}
