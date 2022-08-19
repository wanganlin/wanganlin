package user

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"
	"github.com/wanganlin/goframe/app/request/user"
	"github.com/wanganlin/goframe/app/service"
)

type cAuth struct{}

var Auth = cAuth{}

func (a *cAuth) Login(ctx context.Context, req *user.LoginReq) (res *user.LoginRes, err error) {
	if out, err := service.User().FindById(ctx, 1); err != nil {
		return nil, err
	} else {
		g.RequestFromCtx(ctx).Response.WriteJson(out)
	}

	return
}
