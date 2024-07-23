package seller

import (
	"gitee.com/gosoft/gomall/internal/app/seller/handler"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

func Register(s *ghttp.Server) {
	s.Group("/seller", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("seller"))
		group.ALLMap(g.Map{
			"/": handler.Index,
		})
	})
}
