package handler

import (
	"github.com/gin-gonic/gin"
	"net/http"
)

type indexHandler struct {
}

var IndexHandler = &indexHandler{}

// Health 获取健康状态
func (h *indexHandler) Health(c *gin.Context) {
	c.JSON(http.StatusOK, gin.H{
		"status":  "up",
		"version": "1.0",
	})
}
