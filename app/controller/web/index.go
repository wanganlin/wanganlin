package web

import (
	"github.com/gin-gonic/gin"
	"net/http"
)

var IndexController = indexController{}

type indexController struct {
}

func (a *indexController) Index(c *gin.Context) {
	c.HTML(http.StatusOK, "index.html", gin.H{
		"title": "Main website",
	})
}
