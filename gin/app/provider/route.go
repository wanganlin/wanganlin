package provider

import (
	"gincms/routes"
	"github.com/gin-gonic/gin"
)

var Route = cRoute{}

type cRoute struct {
}

func (a *cRoute) Boot(r *gin.Engine) {
	routes.Api.Route(r)
	routes.Console.Route(r)
	routes.Web.Route(r)
	routes.Web.Static(r)
}
