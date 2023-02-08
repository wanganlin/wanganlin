package service

import (
	"github.com/gogf/gf/frame/g"
	"github.com/gogf/gf/os/gfile"
)

var LocalStorageService = &localStorage{}

type localStorage struct{}

// GetRootPath 获取根目录目录
func (a *localStorage) GetRootPath() string {
	return gfile.Pwd() + gfile.Separator
}

// GetDatabasePath 获取数据库目录
func (a *localStorage) GetDatabasePath() string {
	return a.GetRootPath() + "database" + gfile.Separator
}

// GetLogPath 获取日志目录
func (a *localStorage) GetLogPath() string {
	return a.GetRootPath() + "logs" + gfile.Separator
}

// GetCachePath 获取日志目录
func (a *localStorage) GetCachePath() string {
	return a.GetLogPath() + ".cache" + gfile.Separator
}

// GetStoragePath 获取本地存储目录
func (a *localStorage) GetStoragePath() (string, error) {
	storagePath, err := gfile.Home("报告目录")
	if err != nil {
		return "", nil
	}

	return a.storageInit(storagePath)
}

// storageInit 初始化存储目录
func (a *localStorage) storageInit(storagePath string) (string, error) {
	dirs := []string{"浓度", "曲线"}

	for _, dir := range dirs {
		if !gfile.Exists(storagePath + gfile.Separator + dir) {
			if err := gfile.Mkdir(storagePath + gfile.Separator + dir); err != nil {
				g.Log().Errorf("目录: %s 创建失败", dir)
				return storagePath, err
			}
		}
	}

	return storagePath, nil
}
