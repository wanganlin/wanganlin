package provider

import (
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/route"
)

type cRoute struct{}

var Route = cRoute{}

func (a *cRoute) Boot(s *ghttp.Server) {
	route.Api(s)
	route.Console(s)
	route.User(s)
	route.Web(s)
}
