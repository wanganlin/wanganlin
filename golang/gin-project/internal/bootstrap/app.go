package bootstrap

import (
	"github.com/gin-gonic/gin"

	. "github.com/juling/juling/internal/provider"
)

type app struct {
}

var App = &app{}

func init() {
	gin.SetMode(gin.DebugMode)
}

func (a *app) Run(addr ...string) error {
	r := gin.Default()
	a.Register(r)
	return r.Run(addr...)
}

func (a *app) Register(r *gin.Engine) {
	AppProvider.Boot(r)
	ConfigProvider.Boot(r)
	DatabaseProvider.Boot(r)
	RouteProvider.Boot(r)
	SessionProvider.Boot(r)
	ViewProvider.Boot(r)
}
