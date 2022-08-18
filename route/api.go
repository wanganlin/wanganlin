package route

import (
	"github.com/gogf/gf/v2/net/ghttp"

	"github.com/wanganlin/goframe/app/controller/api"
)

func Api(s *ghttp.Server) {
	s.Group("/api", func(group *ghttp.RouterGroup) {
		group.Middleware(ghttp.MiddlewareHandlerResponse)
		group.Bind(
			api.Index,
		)
	})
}
