package store

import (
	"gitee.com/gosoft/gomall/internal/app/store/handler"
	"gitee.com/gosoft/gomall/internal/middleware"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
)

func Register(s *ghttp.Server) {
	s.Group("/store", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("store"))
		group.ALLMap(g.Map{
			"/": handler.Index,
		})
	})
}
