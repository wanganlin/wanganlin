package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	userHandler struct{}
)

var User = &userHandler{}

func (a *userHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("console/user.html")
	if err != nil {
		return
	}
}
