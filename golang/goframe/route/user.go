package route

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/user"
	"github.com/wanganlin/goframe/app/middleware"
)

func User(s *ghttp.Server) {
	s.Group("/user", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("user"))
		group.ALLMap(g.Map{
			"/":        user.Index,
			"/profile": user.Profile,
		})
	})
}
