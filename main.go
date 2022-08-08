package main

import (
	"github.com/gin-gonic/gin"
	"github.com/gogf/gf/v2/text/gstr"
	"net/http"
)

func main() {
	gin.SetMode(gin.ReleaseMode)

	r := gin.Default()

	r.GET("/", func(c *gin.Context) {
		kebab := gstr.CaseKebab("abcEdf")
		data := map[string]interface{}{
			"lang": "GO语言" + kebab,
			"tag":  "<br>",
		}

		// 输出 : {"lang":"GO\u8bed\u8a00","tag":"\u003cbr\u003e"}
		c.AsciiJSON(http.StatusOK, data)
	})

	// 监听并在 0.0.0.0:8080 上启动服务
	err := r.Run(":8080")
	if err != nil {
		return
	}
}
