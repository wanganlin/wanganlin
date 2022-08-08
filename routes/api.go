package routes

import (
	"gincms/app/controller/api"
	"github.com/gin-gonic/gin"
)

func ApiRoute(r *gin.Engine) {
	route := r.Group("/api")
	{
		route.GET("/", api.IndexController.Index)
	}
}
