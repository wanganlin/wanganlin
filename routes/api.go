package routes

import (
	"gincms/app/controller/api"
	"github.com/gin-gonic/gin"
)

var Api = cApi{}

type cApi struct {
}

func (a *cApi) Route(r *gin.Engine) {
	route := r.Group("/api")
	{
		route.GET("/", api.IndexController.Index)
		route.GET("/setting", api.SettingController.Index)
	}
}
