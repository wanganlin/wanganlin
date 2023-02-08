package controller

import (
	"github.com/gogf/gf/net/ghttp"
	"github.com/gogf/gf/os/gfile"
	"limsctl/response"
	"limsctl/service"
)

var SyncFileController = &syncFile{}

type syncFile struct{}

// UploadFile 上传附件
func (a *syncFile) UploadFile(r *ghttp.Request) {
	fileType := r.GetString("type")
	file := r.GetUploadFile("file")

	if fileType != "curve" && fileType != "concentration" {
		response.JsonExit(r, 1, "不允许上传的文件类型")
	}

	cachePath := service.LocalStorageService.GetCachePath()
	filename, err := file.Save(cachePath)
	if err != nil {
		response.JsonExit(r, 1, "保存本地文件失败")
	}

	err = service.UploadService.UploadFile(cachePath+gfile.Separator+filename, fileType)
	if err != nil {
		response.JsonExit(r, 1, "上传文件失败")
	}

	response.Json(r, 0, "上传成功")
}
