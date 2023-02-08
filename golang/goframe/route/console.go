package route

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/console"
	"github.com/wanganlin/goframe/app/middleware"
)

func Console(s *ghttp.Server) {
	s.Group("/console", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("console"))
		group.ALLMap(g.Map{
			"/":     console.Index,
			"/user": console.User,
		})
	})
}
