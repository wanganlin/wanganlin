package exception

import (
	"net/http"
)

// 全局通用错误定义
var (
	BadRequest  = NewError(http.StatusBadRequest, http.StatusText(http.StatusBadRequest))
	Forbidden   = NewError(http.StatusForbidden, http.StatusText(http.StatusForbidden))
	NotFound    = NewError(http.StatusNotFound, http.StatusText(http.StatusNotFound))
	ServerError = NewError(http.StatusInternalServerError, http.StatusText(http.StatusInternalServerError))
)

// Exception 错误消息体
type Exception struct {
	Code    int
	Message string
}

// NewError 创建错误
func NewError(code int, err string) Exception {
	return Exception{
		Code:    code,
		Message: err,
	}
}
