package config

import "net/http"

type CookieConfig struct {
	Path     string
	Domain   string
	Lifetime int
	Secure   bool
	HttpOnly bool
	SameSite http.SameSite
}
