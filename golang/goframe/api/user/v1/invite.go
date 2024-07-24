package v1

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	inviteHandler struct{}
)

var Invite = &inviteHandler{}

func (a *inviteHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("user/invite.html")
	if err != nil {
		return
	}
}
