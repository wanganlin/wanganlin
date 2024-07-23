package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	storeHandler struct{}
)

var Store = &storeHandler{}

func (a *storeHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("seller/store.html")
	if err != nil {
		return
	}
}
