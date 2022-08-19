package console

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"
	"github.com/wanganlin/goframe/app/request/console"
)

type cAuth struct{}

var Auth = cAuth{}

func (a *cAuth) Login(ctx context.Context, req *console.LoginReq) (res *console.LoginRes, err error) {
	g.RequestFromCtx(ctx).Response.WriteJson(g.Map{"a": "b"})
	return
}
