package provider

import (
	"github.com/gogf/gf/v2/net/ghttp"
	"gomall/internal/routes"
)

// Register 注册Infra组件
func Register(s *ghttp.Server) {
	routes.Boot(s)
	// scheduler.Boot()
}
