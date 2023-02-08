package route

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/store"
	"github.com/wanganlin/goframe/app/middleware"
)

func Store(s *ghttp.Server) {
	s.Group("/store", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("store"))
		group.ALLMap(g.Map{
			"/": store.Index,
		})
	})
}
