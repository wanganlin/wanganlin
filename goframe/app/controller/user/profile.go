package user

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type cProfile struct{}

var Profile = cProfile{}

func (a *cProfile) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("user/profile.html")
	if err != nil {
		return
	}
}
