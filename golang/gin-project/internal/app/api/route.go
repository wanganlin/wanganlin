package api

import (
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/app/api/handler"
)

func Register(r *gin.Engine) {
	apiRoute := r.Group("/api")
	{
		apiRoute.GET("/", handler.IndexHandler.Health)
	}
}
