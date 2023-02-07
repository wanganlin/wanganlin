package route

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/portal"
	"github.com/wanganlin/goframe/app/middleware"
)

func Portal(s *ghttp.Server) {
	s.Group("/portal", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.ALLMap(g.Map{
			"/": portal.Index,
		})
	})
}
