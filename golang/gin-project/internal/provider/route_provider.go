package provider

import (
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/routes"
)

type routeProvider struct {
}

var RouteProvider = &routeProvider{}

func (a *routeProvider) Boot(r *gin.Engine) {
	routes.Register(r)
}
