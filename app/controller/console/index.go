package console

import "github.com/gin-gonic/gin"

var IndexController = indexController{}

type indexController struct {
}

func (a *indexController) Index(c *gin.Context) {
	data := gin.H{
		"Admin": "console",
	}
	c.AsciiJSON(200, data)
}
