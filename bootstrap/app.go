package bootstrap

import (
	"gincms/routes"
	"github.com/gin-gonic/gin"
)

func init() {
	gin.SetMode(gin.ReleaseMode)
}

func Run() (err error) {
	r := gin.Default()

	routes.ApiRoute(r)
	routes.ConsoleRoute(r)
	routes.WebRoute(r)
	routes.StaticRoute(r)

	return r.Run(":8080")
}
