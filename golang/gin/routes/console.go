package routes

import (
	"gincms/app/controller/console"
	"github.com/gin-gonic/gin"
)

var Console = cConsole{}

type cConsole struct {
}

func (a *cConsole) Route(r *gin.Engine) {
	route := r.Group("/admin")
	{
		route.GET("/", console.IndexController.Index)
	}
}
