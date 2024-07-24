package v1

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	accountHandler struct{}
)

var Account = &accountHandler{}

func (a *accountHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("user/account.html")
	if err != nil {
		return
	}
}
