package provider

import (
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/route"
)

var Route = cRoute{}

type cRoute struct {
}

func (a *cRoute) Boot(s *ghttp.Server) {
	route.Api(s)
	route.Console(s)
	route.User(s)
	route.Web(s)
}
