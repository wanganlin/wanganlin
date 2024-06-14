package handler

import (
	"github.com/gin-gonic/gin"
	"net/http"
)

type catalogController struct {
}

var CatalogController = &catalogController{}

func (a *catalogController) Index(c *gin.Context) {
	c.HTML(http.StatusOK, "catalog.tmpl", gin.H{
		"title": "Catalog Page",
	})
}
