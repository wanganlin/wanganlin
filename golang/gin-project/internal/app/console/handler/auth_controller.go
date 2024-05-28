package handler

import (
	"github.com/gin-gonic/gin"
	"net/http"
)

type authController struct {
}

var AuthController = &authController{}

func (a *authController) Login(c *gin.Context) {
	c.HTML(http.StatusOK, "console/auth_login.tmpl", gin.H{
		"title": "系统登录",
	})
}
