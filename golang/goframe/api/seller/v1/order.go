package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	orderHandler struct{}
)

var Order = &orderHandler{}

func (a *orderHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("seller/order.html")
	if err != nil {
		return
	}
}
