package middleware

import "github.com/gin-gonic/gin"

type Middleware interface {
	Handle() gin.HandlerFunc
}

func Register(r *gin.Engine) {
	r.Use(GlobalException.Handle())
	r.Use(Cors.Handle())
	r.Use(Session.Handle())
	r.Use(TrimStrings.Handle())
}
