package response

import (
	"gitee.com/gosoft/gomall/internal/exception"
	"net/http"
)

// Result 响应结果
type Result struct {
	Code    int    `json:"code" example:"200"`
	Message string `json:"message" example:"status bad request"`
	Data    any    `json:"data" example:"null"`
}

// Ok 响应成功
func Ok(c *gin.Context, data any) {
	res := &Result{
		Code:    http.StatusOK,
		Message: http.StatusText(http.StatusOK),
		Data:    data,
	}
	c.JSON(http.StatusOK, res)
}

// Fail 响应失败
func Fail(c *gin.Context, err exception.Exception) {
	code := http.StatusOK
	if http.StatusText(err.Code) != "" {
		code = err.Code
	}

	res := &Result{
		Code:    err.Code,
		Message: err.Message,
		Data:    nil,
	}

	c.AbortWithStatusJSON(code, res)
}
