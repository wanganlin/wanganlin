package httpx

import "github.com/gin-gonic/gin"

func IsAjaxRequest(c *gin.Context) bool {
	return c.GetHeader("X-Requested-With") == "XMLHttpRequest"
}
