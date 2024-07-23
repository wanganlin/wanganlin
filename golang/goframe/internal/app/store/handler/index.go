package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type cIndex struct{}

var Index = cIndex{}

func (a *cIndex) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("store/index.html")
	if err != nil {
		return
	}
}
