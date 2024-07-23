package shop

import (
	"gitee.com/gosoft/gomall/internal/app/shop/handler"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

func Register(s *ghttp.Server) {
	s.Group("/shop", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CORS)
		group.Middleware(ghttp.MiddlewareHandlerResponse)
		group.ALLMap(g.Map{
			"/": handler.Index,
		})
	})
}
