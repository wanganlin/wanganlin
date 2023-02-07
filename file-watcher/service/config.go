package service

import (
	"github.com/gogf/gf/frame/g"
	"github.com/gogf/gf/os/gfile"
	"github.com/gogf/gf/text/gstr"
)

var ConfigService = &config{}

type config struct{}

// GetConfig 获取配置信息
func (a *config) GetConfig() interface{} {
	return g.Cfg().Map()
}

// WriteConfig 更新配置文件
func (a *config) WriteConfig(code, device, number, api, key string) error {
	content := `{
"companyCode": "[companyCode]"
"deviceType": "[deviceType]"
"deviceNumber": "[deviceNumber]"
"storageApi": "[storageApi]"
"storageApiKey": "[storageApiKey]"
}`

	content = gstr.ReplaceByMap(content, g.MapStrStr{
		"[companyCode]":   code,
		"[deviceType]":    device,
		"[deviceNumber]":  number,
		"[storageApi]":    api,
		"[storageApiKey]": key,
	})

	return gfile.PutContents("config.json", content)
}
