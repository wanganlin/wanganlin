package bootstrap

import (
	"fmt"
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/global"
	"github.com/juling/juling/internal/middleware"
	"github.com/juling/juling/internal/provider"
	"github.com/juling/juling/internal/route"
)

func init() {
	global.Boot()

	if global.Config.App.Debug {
		gin.SetMode(gin.DebugMode)
	} else {
		gin.SetMode(gin.ReleaseMode)
	}

	provider.Register()
}

func Run(addr ...string) error {
	r := gin.Default()
	middleware.Register(r)
	route.Register(r)

	if addr == nil {
		addr = []string{fmt.Sprintf(":%d", global.Config.Server.Port)}
	}

	return r.Run(addr...)
}
