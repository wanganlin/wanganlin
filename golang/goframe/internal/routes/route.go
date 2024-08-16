package routes

import (
	"gitee.com/gosoft/gomall/internal/controller"
	home "gitee.com/gosoft/gomall/internal/controller/user"
	"gitee.com/gosoft/gomall/internal/handler/auth"
	"gitee.com/gosoft/gomall/internal/handler/common"
	"gitee.com/gosoft/gomall/internal/handler/console"
	"gitee.com/gosoft/gomall/internal/handler/mobile"
	"gitee.com/gosoft/gomall/internal/handler/portal"
	"gitee.com/gosoft/gomall/internal/handler/seller"
	"gitee.com/gosoft/gomall/internal/handler/shop"
	"gitee.com/gosoft/gomall/internal/handler/store"
	"gitee.com/gosoft/gomall/internal/handler/supplier"
	"gitee.com/gosoft/gomall/internal/handler/user"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

func Boot(s *ghttp.Server) {
	s.Group("/api/v1", func(group *ghttp.RouterGroup) {
		group.Middleware(ghttp.MiddlewareHandlerResponse)
		group.Middleware(middleware.CORS())

		group.Group("/auth", func(group *ghttp.RouterGroup) {
			group.Bind(auth.NewV1())
		})

		group.Group("/common", func(group *ghttp.RouterGroup) {
			group.Bind(common.NewV1())
		})

		group.Group("/mobile", func(group *ghttp.RouterGroup) {
			group.Bind(mobile.NewV1())
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

	s.Group("/user", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.Auth("web"))
		group.ALLMap(g.Map{
			"/":        home.Index,
			"/address": home.Address,
		})
	})

	s.Group("/", func(group *ghttp.RouterGroup) {
		group.ALLMap(g.Map{
			"/":         controller.Index,
			"/catalog":  controller.Catalog,
			"/category": controller.Category,
		})
	})
}
