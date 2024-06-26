package middleware

import (
	"github.com/gin-contrib/sessions"
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/foundation/session"
)

type sessionMiddleware struct {
}

var Session = &sessionMiddleware{}

func (a *sessionMiddleware) Handle() gin.HandlerFunc {
	return sessions.Sessions("SESSION_ID", session.Store.New())
}
