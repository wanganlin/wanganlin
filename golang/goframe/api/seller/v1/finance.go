package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	financeHandler struct{}
)

var Finance = &financeHandler{}

func (a *financeHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("seller/finance.html")
	if err != nil {
		return
	}
}
