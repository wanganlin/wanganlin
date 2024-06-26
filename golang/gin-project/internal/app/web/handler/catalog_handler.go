package handler

import (
	"github.com/gin-contrib/sessions"
	"github.com/gin-gonic/gin"
	"net/http"
)

type catalogHandler struct {
}

var CatalogHandler = &catalogHandler{}

func (a *catalogHandler) Index(c *gin.Context) {
	session := sessions.Default(c)
	hello := session.Get("hello")
	if hello == nil {
		hello = "hello def"
	}

	c.HTML(http.StatusOK, "catalog.html", gin.H{
		"title": "catalog " + hello.(string),
	})
}
