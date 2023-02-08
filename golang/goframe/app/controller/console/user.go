package console

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type cUser struct{}

var User = cUser{}

func (a *cUser) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("console/user.html")
	if err != nil {
		return
	}
}
