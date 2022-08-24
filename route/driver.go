package route

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/wanganlin/goframe/app/controller/driver"
	"github.com/wanganlin/goframe/app/middleware"
)

func Driver(s *ghttp.Server) {
	s.Group("/driver", func(group *ghttp.RouterGroup) {
		group.Middleware(middleware.CSRF())
		group.Middleware(middleware.Auth("driver"))
		group.ALLMap(g.Map{
			"/": driver.Index,
		})
	})
}
