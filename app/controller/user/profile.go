package user

import (
	"context"

	"github.com/wanganlin/goframe/app/request/user"
	"github.com/wanganlin/goframe/app/service"
)

type cProfile struct{}

var Profile = cProfile{}

func (a *cProfile) Index(ctx context.Context, req *user.ProfileReq) (res *user.ProfileRes, err error) {
	if _, err := service.User().FindById(ctx, 1); err != nil {
		return nil, err
	}
	return
}
