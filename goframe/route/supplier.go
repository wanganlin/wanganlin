package route

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/supplier"
	"github.com/wanganlin/goframe/app/middleware"
)

func Supplier(s *ghttp.Server) {
	s.Group("/supplier", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("supplier"))
		group.ALLMap(g.Map{
			"/": supplier.Index,
		})
	})
}
