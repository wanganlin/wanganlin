package route

import (
	"github.com/gogf/gf/v2/net/ghttp"

	"github.com/wanganlin/goframe/app/controller/console"
)

func Console(s *ghttp.Server) {
	s.Group("/admin", func(group *ghttp.RouterGroup) {
		group.Middleware(ghttp.MiddlewareHandlerResponse)
		group.Bind(
			console.Index,
		)
	})
}
