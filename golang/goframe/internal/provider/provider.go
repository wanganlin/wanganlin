package provider

import (
	"gitee.com/gosoft/gomall/internal/routes"
	"github.com/gogf/gf/v2/net/ghttp"
)

// Register 注册Infra组件
func Register(s *ghttp.Server) {
	routes.Boot(s)
	// scheduler.Boot()
}
