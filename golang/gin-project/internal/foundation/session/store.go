package session

import (
	"github.com/gin-contrib/sessions"
	"github.com/gin-contrib/sessions/cookie"
	"github.com/gin-contrib/sessions/redis"
	"github.com/juling/juling/internal/global"
	"strconv"
)

type sessionStore struct {
}

var Store = &sessionStore{}

func (a *sessionStore) New() sessions.Store {
	secret := global.Config.App.Key
	driver := global.Config.Session.Driver
	var sessionStore sessions.Store

	switch driver {
	case "redis":
		sessionStore = a.redis(secret)
	default:
		sessionStore = a.cookie(secret)
	}

	config := global.Config.Cookie
	sessionStore.Options(sessions.Options{
		Path:     config.Path,
		Domain:   config.Domain,
		MaxAge:   config.Lifetime,
		Secure:   config.Secure,
		HttpOnly: config.HttpOnly,
		SameSite: config.SameSite,
	})

	return sessionStore
}

func (a *sessionStore) cookie(secret string) sessions.Store {
	return cookie.NewStore([]byte(secret))
}

func (a *sessionStore) redis(secret string) sessions.Store {
	maxIdle := 10
	config := global.Config.Redis

	sessionStore, err := redis.NewStore(maxIdle, "tcp", config.Host+":"+strconv.Itoa(config.Port), config.Password, []byte(secret))
	if err != nil {
		panic(err)
	}

	return sessionStore
}
