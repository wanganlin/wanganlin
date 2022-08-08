package routes

import (
	"gincms/app/controller/console"
	"github.com/gin-gonic/gin"
)

func ConsoleRoute(r *gin.Engine) {
	route := r.Group("/admin")
	{
		route.GET("/", console.IndexController.Index)
	}
}
