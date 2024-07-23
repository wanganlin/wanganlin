package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	addressHandler struct{}
)

var Address = &addressHandler{}

func (a *addressHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("user/address.html")
	if err != nil {
		return
	}
}
