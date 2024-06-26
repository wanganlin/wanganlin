package console

import (
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/app/console/handler"
)

func Register(r *gin.Engine) {
	consoleRoute := r.Group("/api/admin")
	{
		consoleRoute.GET("/login", handler.AuthController.Login)
		consoleRoute.GET("/", handler.IndexController.Index)
	}
}
