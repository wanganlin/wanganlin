package provider

import (
	"gincms/routes"
	"github.com/gin-gonic/gin"
)

var Route = route{}

type route struct {
}

func (a *route) Boot(r *gin.Engine) {
	routes.ApiRoute(r)
	routes.ConsoleRoute(r)
	routes.WebRoute(r)
	routes.StaticRoute(r)
}
