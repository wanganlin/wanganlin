package user

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"

	"github.com/wanganlin/goframe/app/request/user"
)

var (
	Index = cIndex{}
)

type cIndex struct{}

func (a *cIndex) Index(ctx context.Context, req *user.HelloReq) (res *user.HelloRes, err error) {
	g.RequestFromCtx(ctx).Response.WriteTpl("user/index.html")
	return
}
