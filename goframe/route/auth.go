package route

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/auth"
	"github.com/wanganlin/goframe/app/middleware"
)

func Auth(s *ghttp.Server) {
	s.Group("/auth", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.ALLMap(g.Map{
			"/login":    auth.Login,
			"/register": auth.Register,
			"/forgot":   auth.Forgot,
			"/reset":    auth.Reset,
		})
	})
}
