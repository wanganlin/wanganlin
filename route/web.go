package route

import (
	"github.com/gogf/gf/v2/net/ghttp"

	"github.com/wanganlin/goframe/app/controller/web"
)

func Web(s *ghttp.Server) {
	s.Group("/", func(group *ghttp.RouterGroup) {
		group.Middleware(ghttp.MiddlewareHandlerResponse)
		group.Bind(
			web.Index,
		)
	})
}
