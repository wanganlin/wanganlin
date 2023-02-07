package auth

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

type cReset struct{}

var Reset = cReset{}

// Index 重置密码
func (a *cReset) Index(r *ghttp.Request) {
	if r.IsAjaxRequest() {
		r.Response.WriteJson(g.Map{"aa": "bb"})
	}

	err := r.Response.WriteTpl("auth/reset.html")
	if err != nil {
		return
	}
}
