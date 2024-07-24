package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	indexHandler struct{}
)

var Index = &indexHandler{}

func (a *indexHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("seller/index.html")
	if err != nil {
		return
	}
}
