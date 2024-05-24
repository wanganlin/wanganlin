package provider

import (
	"github.com/gin-gonic/gin"
	"net/http"
)

type appProvider struct {
}

var AppProvider = &appProvider{}

func (a *appProvider) Boot(r *gin.Engine) {
	r.StaticFile("/favicon.ico", "public/favicon.ico")
	r.StaticFile("/robots.txt", "public/robots.txt")
	r.StaticFS("/assets", http.Dir("public/assets"))
	r.StaticFS("/static", http.Dir("public/static"))
}
