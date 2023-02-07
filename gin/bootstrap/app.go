package bootstrap

import (
	"gincms/app/provider"
	"github.com/gin-gonic/gin"
)

func init() {
	gin.SetMode(gin.ReleaseMode)
}

func Run() (err error) {
	r := gin.Default()

	provider.Database.Boot(r)
	provider.Route.Boot(r)
	provider.View.Boot(r)

	return r.Run(":8080")
}
