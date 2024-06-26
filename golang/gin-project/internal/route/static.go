package route

import (
	"github.com/gin-gonic/gin"
	"github.com/gogf/gf/v2/os/gfile"
	"github.com/juling/juling/internal/global"
	"net/http"
)

type staticRoute struct {
}

var StaticRoute = &staticRoute{}

func (a *staticRoute) Register(r *gin.Engine) {
	a.assets(r)
	a.view(r)
}

// assets 加载静态文件
func (a *staticRoute) assets(r *gin.Engine) {
	if gfile.IsDir("docs") {
		r.StaticFS("/docs", http.Dir("docs"))
	}

	if gfile.IsDir("public") {
		r.StaticFS("/assets", http.Dir("public/assets"))
		r.StaticFS("/themes", http.Dir("public/themes"))
		r.StaticFile("/favicon.ico", "public/favicon.ico")
		r.StaticFile("/robots.txt", "public/robots.txt")
	}
}

// view 加载视图模板
func (a *staticRoute) view(r *gin.Engine) {
	viewPath := global.Config.View.Path
	if gfile.IsDir(viewPath) {
		r.LoadHTMLGlob(viewPath + "/*.html")
	}
}
