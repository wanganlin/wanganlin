package middleware

import (
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/exception"
	"github.com/juling/juling/internal/response"
)

type globalExceptionMiddleware struct {
}

var GlobalException = &globalExceptionMiddleware{}

func (a *globalExceptionMiddleware) Handle() gin.HandlerFunc {
	return func(c *gin.Context) {
		defer func() {
			if err := recover(); err != nil {
				// TODO log

				response.Fail(c, exception.Error)
			}
		}()
		c.Next()
	}
}

func detectError(err any) string {
	switch e := err.(type) {
	case error:
		return e.Error()
	default:
		return e.(string)
	}
}
