package routes

import (
	"gitee.com/gosoft/gomall/internal/controller/auth"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/net/ghttp"
)

type routeProvider struct{}

var RouteProvider = routeProvider{}

func (a *routeProvider) Boot(s *ghttp.Server) {
	s.Group("/auth", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Bind(
			auth.NewV1(),
		)
	})

	s.Group("/console", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("console"))
		group.Bind(
			auth.NewV1(),
		)
	})

	s.Group("/", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CORS)
		group.Middleware(ghttp.MiddlewareHandlerResponse)
		group.Bind(
			auth.NewV1(),
		)
	})

	s.Group("/portal", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Bind(
			auth.NewV1(),
		)
	})

	s.Group("/seller", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("seller"))
		group.Bind(
			auth.NewV1(),
		)
	})

	s.Group("/shop", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CORS)
		group.Middleware(ghttp.MiddlewareHandlerResponse)
		group.Bind(
			auth.NewV1(),
		)
	})

	s.Group("/store", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("store"))
		group.Bind(
			auth.NewV1(),
		)
	})

	s.Group("/supplier", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("supplier"))
		group.Bind(
			auth.NewV1(),
		)
	})

	s.Group("/user", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("user"))
		group.Bind(
			auth.NewV1(),
		)
	})
}
