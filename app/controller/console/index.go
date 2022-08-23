package console

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"
)

type cIndex struct{}

var Index = cIndex{}

type IndexReq struct {
	g.Meta `path:"/" method:"get"`
}
type IndexRes struct{}

func (a *cIndex) Index(ctx context.Context, r *IndexReq) (res *IndexRes, err error) {
	err = g.RequestFromCtx(ctx).Response.WriteTpl("console/index.html")
	return
}
