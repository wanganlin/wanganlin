package user

import (
	"context"

	"github.com/gogf/gf/v2/os/gfile"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/wanganlin/goframe/app/request/user"
)

var (
	Index = cIndex{}
)

type cIndex struct{}

func (a *cIndex) Index(ctx context.Context, req *user.HelloReq) (res *user.HelloRes, err error) {
	content := gfile.GetContents("public/static/user/index.html")
	g.RequestFromCtx(ctx).Response.WriteTplContent(content)
	return
}
