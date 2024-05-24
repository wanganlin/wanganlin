package handler

import (
	"github.com/gin-gonic/gin"
	"net/http"
)

type indexController struct {
}

var IndexController = &indexController{}

func (a *indexController) Index(c *gin.Context) {
	c.HTML(http.StatusOK, "manager/index.tmpl", gin.H{
		"title": "Admin Page",
	})
}
