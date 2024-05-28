package provider

import (
	"github.com/gin-contrib/sessions"
	"github.com/gin-contrib/sessions/redis"
	"github.com/gin-gonic/gin"
)

type sessionProvider struct {
}

var SessionProvider = &sessionProvider{}

func (a *sessionProvider) Boot(r *gin.Engine) {
	store, _ := redis.NewStore(10, "tcp", "localhost:6379", "", []byte("secret"))
	r.Use(sessions.Sessions("session", store))
}
