package route

import (
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/web"
	"github.com/wanganlin/goframe/app/middleware"
)

func Web(s *ghttp.Server) {
	s.Group("/", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Bind(
			web.Index,
		)
	})
}
