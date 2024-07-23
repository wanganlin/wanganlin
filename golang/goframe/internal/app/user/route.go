package user

import (
	"gitee.com/gosoft/gomall/internal/app/user/handler"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

func Register(s *ghttp.Server) {
	s.Group("/user", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("user"))
		group.ALLMap(g.Map{
			"/":        handler.Index,
			"/profile": handler.Profile,
		})
	})
}
