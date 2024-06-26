package middleware

import (
	"github.com/gin-gonic/gin"
)

type trimStringsMiddleware struct {
}

var TrimStrings = &trimStringsMiddleware{}

func (a *trimStringsMiddleware) Handle() gin.HandlerFunc {
	return func(c *gin.Context) {
		c.Next()
	}
}
