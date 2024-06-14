package bootstrap

import (
	"fmt"
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/config"
	. "github.com/juling/juling/internal/provider"
)

type app struct {
}

var (
	App       = &app{}
	servePort int
)

func init() {
	config.InitConfig()

	if config.Cfg.App.Debug {
		gin.SetMode(gin.DebugMode)
	} else {
		gin.SetMode(gin.ReleaseMode)
	}

	servePort = config.Cfg.Server.Port
}

func (a *app) Run() error {
	r := gin.Default()
	a.Register(r)
	return r.Run(fmt.Sprintf(":%d", servePort))
}

func (a *app) Register(r *gin.Engine) {
	AppProvider.Boot(r)
	ConfigProvider.Boot(r)
	DatabaseProvider.Boot(r)
	RouteProvider.Boot(r)
	SessionProvider.Boot(r)
	ViewProvider.Boot(r)
}
