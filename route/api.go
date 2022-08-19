package route

import (
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/api"
	"github.com/wanganlin/goframe/app/middleware"
)

func Api(s *ghttp.Server) {
	s.Group("/api", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CORS)
		group.Middleware(ghttp.MiddlewareHandlerResponse)
		group.Bind(
			api.Index,
		)
	})
}
