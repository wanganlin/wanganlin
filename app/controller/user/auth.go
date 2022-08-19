package user

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"
	"github.com/wanganlin/goframe/app/request/user"
)

type cAuth struct{}

var Auth = cAuth{}

func (a *cAuth) Login(ctx context.Context, req *user.LoginReq) (res *user.LoginRes, err error) {
	g.RequestFromCtx(ctx).Response.WriteJson(g.Map{"a": "b"})
	return
}
