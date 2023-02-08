package service

import (
	"github.com/gogf/gf/frame/g"
	"github.com/gogf/gf/os/gfile"
	"limsctl/model"
)

var SyncFileService = &syncFile{}

type syncFile struct{}

// Create 创建本地文件记录
func (a *syncFile) Create(filePath string) bool {
	g.Log().Infof("开始记录文件: %s", filePath)

	name := gfile.Basename(filePath)

	model.DB.Create(&model.File{Name: name, Path: filePath, Status: 0, ErrorCounter: 0})

	return true
}

// GetSyncStatusByFilePath 获取文件同步状态
func (a *syncFile) GetSyncStatusByFilePath(filePath string) string {
	var file model.File
	model.DB.First(&file, "path = ?", filePath)

	if file.Status == 1 {
		return "synced"
	}

	return "unknown"
}

// UpdateSyncStatusByFilePath 更新本地文件记录
func (a *syncFile) UpdateSyncStatusByFilePath(filePath string) bool {
	var file model.File

	model.DB.First(&file, "path = ?", filePath)
	file.Status = 1
	model.DB.Save(&file)

	return true
}

// DeleteByFilePath 移除本地文件记录
func (a *syncFile) DeleteByFilePath(filePath string) bool {
	g.Log().Infof("删除文件: %s", filePath)

	var file model.File
	model.DB.Where("path = ?", filePath).Unscoped().Delete(&file)

	return true
}
