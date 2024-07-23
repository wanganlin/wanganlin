package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	settingHandler struct{}
)

var Setting = &settingHandler{}

func (a *settingHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("seller/setting.html")
	if err != nil {
		return
	}
}
