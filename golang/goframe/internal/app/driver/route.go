package driver

import (
	"gitee.com/gosoft/gomall/internal/app/driver/handler"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

func Register(s *ghttp.Server) {
	s.Group("/driver", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("driver"))
		group.ALLMap(g.Map{
			"/": handler.Index,
		})
	})
}
