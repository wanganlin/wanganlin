package auth

import (
	"gitee.com/gosoft/gomall/internal/app/auth/handler"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

func Register(s *ghttp.Server) {
	s.Group("/auth", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.ALLMap(g.Map{
			"/login":    handler.Login,
			"/register": handler.Register,
			"/forgot":   handler.Forgot,
			"/reset":    handler.Reset,
		})
	})
}
