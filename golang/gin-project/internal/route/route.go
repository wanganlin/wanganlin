package route

import (
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/app/api"
	"github.com/juling/juling/internal/app/console"
	"github.com/juling/juling/internal/app/web"
	"github.com/juling/juling/internal/foundation/httpx"
	"github.com/juling/juling/internal/response"
	"net/http"
)

// Register 注册全局路由
func Register(r *gin.Engine) {
	appRoutes(r)
	StaticRoute.Register(r)
	r.NoRoute(notFound())
}

// appRoutes 应用模块路由
func appRoutes(r *gin.Engine) {
	api.Register(r)
	console.Register(r)
	web.Register(r)
}

// notFound 没有找到页面路由
func notFound() gin.HandlerFunc {
	return func(c *gin.Context) {
		if httpx.IsAjaxRequest(c) {
			response.Fail(c, response.NewError(http.StatusNotFound, http.StatusText(http.StatusNotFound)))
		} else {
			c.HTML(http.StatusNotFound, "404.html", nil)
		}
	}
}
