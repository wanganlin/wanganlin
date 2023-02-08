package provider

import (
	"github.com/gin-gonic/gin"
)

var View = cView{}

type cView struct {
}

func (a *cView) Boot(r *gin.Engine) {
	r.LoadHTMLGlob("resources/views/*")
}
