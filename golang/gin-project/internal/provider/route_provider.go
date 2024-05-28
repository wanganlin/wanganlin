package provider

import (
	"github.com/gin-gonic/gin"
	apiRoute "github.com/juling/juling/internal/app/api/route"
	consoleRoute "github.com/juling/juling/internal/app/console/route"
	webRoute "github.com/juling/juling/internal/app/web/route"
)

type routeProvider struct {
}

var RouteProvider = &routeProvider{}

func (a *routeProvider) Boot(r *gin.Engine) {
	apiRoute.Register(r)
	consoleRoute.Register(r)
	webRoute.Register(r)
}
