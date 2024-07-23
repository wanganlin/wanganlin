package supplier

import (
	"gitee.com/gosoft/gomall/internal/app/supplier/handler"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

func Register(s *ghttp.Server) {
	s.Group("/supplier", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("supplier"))
		group.ALLMap(g.Map{
			"/": handler.Index,
		})
	})
}
