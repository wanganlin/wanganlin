package route

import (
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/user"
)

func User(s *ghttp.Server) {
	s.Group("/user", func(group *ghttp.RouterGroup) {
		group.Middleware(ghttp.MiddlewareHandlerResponse)
		group.Bind(
			user.Index,
		)
	})
}
