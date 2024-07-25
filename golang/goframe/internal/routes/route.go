package routes

import (
	"gitee.com/gosoft/gomall/internal/controller/auth"
	"gitee.com/gosoft/gomall/internal/controller/console"
	"gitee.com/gosoft/gomall/internal/controller/market"
	"gitee.com/gosoft/gomall/internal/controller/portal"
	"gitee.com/gosoft/gomall/internal/controller/seller"
	"gitee.com/gosoft/gomall/internal/controller/shop"
	"gitee.com/gosoft/gomall/internal/controller/store"
	"gitee.com/gosoft/gomall/internal/controller/supplier"
	"gitee.com/gosoft/gomall/internal/controller/user"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/net/ghttp"
)

type routeProvider struct{}

var RouteProvider = routeProvider{}

func (a *routeProvider) Boot(s *ghttp.Server) {
	s.Group("/api/v1", func(group *ghttp.RouterGroup) {
		group.Middleware(ghttp.MiddlewareHandlerResponse)
		group.Middleware(middleware.CORS())

		group.Group("/auth", func(group *ghttp.RouterGroup) {
			group.Bind(auth.NewV1())
		})

		group.Group("/market", func(group *ghttp.RouterGroup) {
			group.Bind(market.NewV1())
		})

		group.Group("/shop", func(group *ghttp.RouterGroup) {
			group.Bind(shop.NewV1())
		})

		group.Group("/portal", func(group *ghttp.RouterGroup) {
			group.Bind(portal.NewV1())
		})

		group.Group("/console", func(group *ghttp.RouterGroup) {
			group.Bind(console.NewV1()).Middleware(middleware.Auth("console"))
		})

		group.Group("/seller", func(group *ghttp.RouterGroup) {
			group.Bind(seller.NewV1()).Middleware(middleware.Auth("seller"))
		})

		group.Group("/store", func(group *ghttp.RouterGroup) {
			group.Bind(store.NewV1()).Middleware(middleware.Auth("store"))
		})

		group.Group("/supplier", func(group *ghttp.RouterGroup) {
			group.Bind(supplier.NewV1()).Middleware(middleware.Auth("supplier"))
		})

		group.Group("/user", func(group *ghttp.RouterGroup) {
			group.Bind(user.NewV1()).Middleware(middleware.Auth("user"))
		})
	})
}
