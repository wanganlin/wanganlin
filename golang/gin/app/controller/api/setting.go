package api

import (
	"gincms/app/entity"
	"gincms/config"
	"github.com/gin-gonic/gin"
	"github.com/gogf/gf/v2/text/gstr"
	"net/http"
)

var SettingController = settingController{}

type settingController struct {
}

func (a *settingController) Index(c *gin.Context) {
	var setting entity.OptionSetting
	config.DB.First(&setting)

	kebab := gstr.CaseKebab("abcEdf")
	data := map[string]interface{}{
		"lang": "GO语言" + kebab,
		"tag":  "<br>",
		"obj":  setting,
	}

	// 输出 : {"lang":"GO\u8bed\u8a00","tag":"\u003cbr\u003e"}
	c.AsciiJSON(http.StatusOK, data)
}
