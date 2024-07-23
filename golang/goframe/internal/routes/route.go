package routes

import (
	"gitee.com/gosoft/gomall/internal/app/auth"
	"gitee.com/gosoft/gomall/internal/app/console"
	"gitee.com/gosoft/gomall/internal/app/driver"
	"gitee.com/gosoft/gomall/internal/app/market"
	"gitee.com/gosoft/gomall/internal/app/portal"
	"gitee.com/gosoft/gomall/internal/app/seller"
	"gitee.com/gosoft/gomall/internal/app/shop"
	"gitee.com/gosoft/gomall/internal/app/store"
	"gitee.com/gosoft/gomall/internal/app/supplier"
	"gitee.com/gosoft/gomall/internal/app/user"
	"github.com/gogf/gf/v2/net/ghttp"
)

type routeProvider struct{}

var RouteProvider = routeProvider{}

func (a *routeProvider) Boot(s *ghttp.Server) {
	auth.Register(s)
	console.Register(s)
	driver.Register(s)
	market.Register(s)
	portal.Register(s)
	seller.Register(s)
	shop.Register(s)
	store.Register(s)
	supplier.Register(s)
	user.Register(s)
}
