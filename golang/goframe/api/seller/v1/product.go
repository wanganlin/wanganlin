package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	productHandler struct{}
)

var Product = &productHandler{}

func (a *productHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("seller/product.html")
	if err != nil {
		return
	}
}
