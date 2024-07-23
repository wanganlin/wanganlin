package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	deliveryHandler struct{}
)

var Delivery = &deliveryHandler{}

func (a *deliveryHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("seller/delivery.html")
	if err != nil {
		return
	}
}
