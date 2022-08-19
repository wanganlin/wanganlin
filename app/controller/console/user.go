package console

import (
	"context"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/wanganlin/goframe/app/request/console"
)

var (
	User = cUser{}
)

type cUser struct{}

func (a *cUser) Index(ctx context.Context, req *console.UserListReq) (res *console.UserListRes, err error) {
	g.RequestFromCtx(ctx).Response.WriteJson(g.Map{"a": "b"})
	return
}
