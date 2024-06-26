package handler

import (
	"github.com/gin-contrib/sessions"
	"github.com/gin-gonic/gin"
	"net/http"
)

type indexHandler struct {
}

var IndexHandler = &indexHandler{}

func (a *indexHandler) Index(c *gin.Context) {
	session := sessions.Default(c)
	session.Set("hello", "session world.")
	if err := session.Save(); err != nil {
		panic(err)
	}

	c.HTML(http.StatusOK, "index.html", gin.H{
		"title": "website",
	})
}
