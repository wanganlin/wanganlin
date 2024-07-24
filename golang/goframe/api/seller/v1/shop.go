package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	shopHandler struct{}
)

var Shop = &shopHandler{}

func (a *shopHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("seller/shop.html")
	if err != nil {
		return
	}
}
