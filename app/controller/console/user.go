package console

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"
)

type cUser struct{}

var User = cUser{}

type UserIndexReq struct {
	g.Meta `path:"/user" method:"get"`
}
type UserIndexRes struct{}

func (a *cUser) Index(ctx context.Context, r *UserIndexReq) (res *UserIndexRes, err error) {
	err = g.RequestFromCtx(ctx).Response.WriteTpl("console/user.html")
	return
}
