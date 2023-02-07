package api

import (
	"github.com/gin-gonic/gin"
	"github.com/gogf/gf/v2/text/gstr"
	"net/http"
)

var IndexController = indexController{}

type indexController struct {
}

func (a *indexController) Index(c *gin.Context) {
	kebab := gstr.CaseKebab("abcEdf")
	data := map[string]interface{}{
		"lang": "GO语言" + kebab,
		"tag":  "<br>",
	}

	// 输出 : {"lang":"GO\u8bed\u8a00","tag":"\u003cbr\u003e"}
	c.AsciiJSON(http.StatusOK, data)
}
