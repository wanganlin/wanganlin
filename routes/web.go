package routes

import (
	"gincms/app/controller/web"
	"github.com/gin-gonic/gin"
	"net/http"
)

func WebRoute(route *gin.Engine) {
	route.GET("/", web.IndexController.Index)
}

func StaticRoute(route *gin.Engine) {
	route.StaticFS("/assets", http.Dir("public/assets"))
	route.StaticFS("/static", http.Dir("public/static"))
	route.StaticFS("/themes", http.Dir("public/themes"))
	route.StaticFile("/favicon.ico", "./public/favicon.ico")
	route.StaticFile("/robots.txt", "./public/robots.txt")
}
