package route

import (
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/app/web/handler"
)

func Register(r *gin.Engine) {
	r.GET("/", handler.IndexController.Index)
}
