package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	profileHandler struct{}
)

var Profile = &profileHandler{}

func (a *profileHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("user/profile.html")
	if err != nil {
		return
	}
}
