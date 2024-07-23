package console

import (
	"gitee.com/gosoft/gomall/internal/app/console/handler"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

func Register(s *ghttp.Server) {
	s.Group("/console", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("console"))
		group.ALLMap(g.Map{
			"/":     handler.Index,
			"/user": handler.User,
		})
	})
}
