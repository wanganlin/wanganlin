package response

import (
	"github.com/gin-gonic/gin"
	"net/http"
)

type StatusCode struct {
	Code    int    `json:"code" example:"200"`
	Message string `json:"message" example:"status bad request"`
}

type Result struct {
	StatusCode
	Data any `json:"data" example:"null"`
}

func Ok(c *gin.Context, data any) {
	res := Result{}
	res.Code = http.StatusOK
	res.Message = http.StatusText(http.StatusOK)
	res.Data = data
	c.JSON(http.StatusOK, res)
}

func Fail(c *gin.Context, err StatusCode) {
	res := Result{}
	res.Code = err.Code
	res.Message = err.Message
	res.Data = nil

	code := http.StatusOK
	if http.StatusText(err.Code) != "" {
		code = err.Code
	}

	c.JSON(code, res)
	c.Abort()
}

func NewError(code int, err string) StatusCode {
	return StatusCode{
		Code:    code,
		Message: err,
	}
}
