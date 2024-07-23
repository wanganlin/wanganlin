package portal

import (
	"gitee.com/gosoft/gomall/internal/app/portal/handler"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

func Register(s *ghttp.Server) {
	s.Group("/portal", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.ALLMap(g.Map{
			"/": handler.Index,
		})
	})
}
