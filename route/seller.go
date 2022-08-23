package route

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/seller"
	"github.com/wanganlin/goframe/app/middleware"
)

func Seller(s *ghttp.Server) {
	s.Group("/seller", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Bind(seller.Auth)
		group.Middleware(middleware.Auth("seller"))
		group.ALLMap(g.Map{
			"/": seller.Index,
		})
	})
}
