package service

import (
	"encoding/json"
	"errors"
	"limsctl/response"
	"time"

	"github.com/gogf/gf/crypto/gmd5"
	"github.com/gogf/gf/frame/g"
	"github.com/gogf/gf/os/gfile"
	"github.com/gogf/gf/text/gstr"
)

var (
	UploadService = &upload{}
	resp          response.ApiResponse
)

type upload struct{}

// UploadFile 上传本地存储的文件
func (a *upload) UploadFile(filePath string, fileType string) error {
	url := a.getRequestUrl(filePath, fileType)
	content := g.Client().Timeout(5*time.Second).PostContent(url, "file=@file:"+filePath)

	if err := json.Unmarshal([]byte(content), &resp); err != nil {
		g.Log().Errorf("上传响应接口JSON解析失败：%v", content)
		return errors.New("上传响应接口JSON解析失败")
	} else {
		if resp.Code != 200 {
			return errors.New(resp.Msg)
		} else {
			// 更新本地数据库
			SyncFileService.UpdateSyncStatusByFilePath(filePath)
			return nil
		}
	}
}

// getRequestUrl 获取请求API地址
func (a *upload) getRequestUrl(path string, fileType string) string {
	// 仪器设备配置信息
	companyCode := g.Cfg().GetString("companyCode")
	deviceType := g.Cfg().GetString("deviceType")
	deviceNumber := g.Cfg().GetString("deviceNumber")
	storageApi := g.Cfg().GetString("storageApi")
	storageApiKey := g.Cfg().GetString("storageApiKey")

	// 请求参数
	defaultParams := "companyCode=" + companyCode + "&deviceType=" + deviceType + "&deviceNumber=" + deviceNumber

	typeParams := ""
	i1 := gstr.PosI(path, gfile.Separator+"浓度"+gfile.Separator, 0)
	if i1 >= 0 {
		typeParams = "&type=concentration"
	}

	i2 := gstr.PosI(path, gfile.Separator+"曲线"+gfile.Separator, 0)
	if i2 >= 0 {
		typeParams = "&type=curve"
	}

	// 指定文件类型
	if fileType != "" {
		typeParams = "&type=" + fileType
	}

	return storageApi + "?" + defaultParams + typeParams + "&sign=" + a.getSign(defaultParams+typeParams, storageApiKey)
}

// getSign 获取签名
func (a *upload) getSign(data, key string) string {
	e, err := gmd5.EncryptString(data + key)
	if err != nil {
		return ""
	}
	return e
}
