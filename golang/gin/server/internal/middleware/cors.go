package middleware

import (
	"github.com/gin-contrib/cors"
	"github.com/gin-gonic/gin"
)

type corsMiddleware struct {
}

var Cors = &corsMiddleware{}

func (a *corsMiddleware) Handle() gin.HandlerFunc {
	return cors.Default()
}
