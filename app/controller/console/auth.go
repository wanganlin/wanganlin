package console

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"

	"github.com/wanganlin/goframe/app/request/console"
)

var (
	Auth = cAuth{}
)

type cAuth struct{}

func (a *cAuth) Login(ctx context.Context, req *console.LoginReq) (res *console.LoginRes, err error) {
	g.RequestFromCtx(ctx).Response.WriteTpl("console/auth_login.html")
	return
}
