package web

import (
	"context"

	"github.com/wanganlin/goframe/app/response"
	"github.com/wanganlin/goframe/app/request/web"
)

type cIndex struct{}

var Index = cIndex{}

func (a *cIndex) Index(ctx context.Context, req *web.HelloReq) (res *web.HelloRes, err error) {
	response.Display(ctx, "index.html")
	return
}
