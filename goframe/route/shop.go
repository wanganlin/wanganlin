package route

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/shop"
	"github.com/wanganlin/goframe/app/middleware"
)

func Shop(s *ghttp.Server) {
	s.Group("/shop", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CORS)
		group.Middleware(ghttp.MiddlewareHandlerResponse)
		group.ALLMap(g.Map{
			"/": shop.Index,
		})
	})
}
