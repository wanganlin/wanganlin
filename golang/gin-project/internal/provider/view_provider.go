package provider

import (
	"github.com/gin-gonic/gin"
)

type viewProvider struct {
}

var ViewProvider = &viewProvider{}

func (a *viewProvider) Boot(r *gin.Engine) {
	r.LoadHTMLGlob("templates/*.tmpl")
}
