package provider

import (
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/route"
)

type cRoute struct{}

var Route = cRoute{}

func (a *cRoute) Boot(s *ghttp.Server) {
	route.Auth(s)
	route.Console(s)
	route.Driver(s)
	route.Market(s)
	route.Portal(s)
	route.Seller(s)
	route.Shop(s)
	route.Store(s)
	route.Supplier(s)
	route.User(s)
}
