package user

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"
)

type cProfile struct{}

var Profile = cProfile{}

type ProfileIndexReq struct {
	g.Meta `path:"/profile" method:"get"`
}
type ProfileIndexRes struct{}

func (a *cProfile) Index(ctx context.Context, r *ProfileIndexReq) (res *ProfileIndexRes, err error) {
	err = g.RequestFromCtx(ctx).Response.WriteTpl("user/profile.html")
	return
}
