package route

import (
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/app/console/handler"
)

func Register(r *gin.Engine) {
	consoleRoute := r.Group("/admin")
	{
		consoleRoute.GET("/", handler.IndexController.Index)
	}
}
