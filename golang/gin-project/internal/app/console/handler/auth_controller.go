package handler

import (
	"github.com/gin-gonic/gin"
	"net/http"
)

type authController struct {
}

var AuthController = &authController{}

func (a *authController) Login(c *gin.Context) {
	c.JSON(http.StatusOK, gin.H{
		"title": "系统登录",
	})
}
