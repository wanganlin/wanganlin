package user

import (
	"context"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/wanganlin/goframe/app/request/user"
)

var (
	Profile = cProfile{}
)

type cProfile struct{}

func (a *cProfile) Index(ctx context.Context, req *user.ProfileReq) (res *user.ProfileRes, err error) {
	g.RequestFromCtx(ctx).Response.WriteJson(g.Map{"user": "profile"})
	return
}
