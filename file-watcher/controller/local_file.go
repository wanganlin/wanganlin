package controller

import (
	"github.com/gogf/gf/frame/g"
	"github.com/gogf/gf/net/ghttp"
	"github.com/gogf/gf/os/gfile"
	"github.com/gogf/gf/text/gstr"
	"limsctl/response"
	"limsctl/service"
)

var LocalFileController = &localFile{}

type localFile struct{}

// Explorer 文件浏览器
func (a *localFile) Explorer(r *ghttp.Request) {
	currentPath := r.GetString("path", "/")
	currentPath = gstr.TrimLeft(currentPath, "/")
	currentPath = gstr.Replace(currentPath, "/", gfile.Separator)
	currentPath = gstr.Replace(currentPath, "..", "")

	rootPath, err := service.LocalStorageService.GetStoragePath()
	if err != nil {
		response.JsonExit(r, 1, "Get storage path fail", nil)
	}

	basePath := rootPath + gfile.Separator + currentPath + gfile.Separator

	glob, _ := gfile.Glob(basePath + "*")

	dirs := g.Slice{}
	files := g.Slice{}
	for _, item := range glob {
		if gfile.IsDir(item) {
			dirs = append(dirs, map[string]string{
				"name":  gfile.Basename(item),
				"mtime": gfile.MTime(item).Format("2006-01-02 15:04:05"),
				"size":  "",
				"type":  "folder",
			})
		}
		if gfile.IsFile(item) {
			files = append(files, map[string]string{
				"name":   gfile.Basename(item),
				"mtime":  gfile.MTime(item).Format("2006-01-02 15:04:05"),
				"size":   gfile.FormatSize(gfile.Size(item)),
				"type":   gfile.ExtName(item),
				"status": service.SyncFileService.GetSyncStatusByFilePath(item),
			})
		}
	}

	response.JsonExit(r, 0, "ok", g.Map{
		"paths": gstr.Explode(gfile.Separator, currentPath),
		"dirs":  dirs,
		"files": files,
	})
}

// CreateFolder 创建本地文件夹
func (a *localFile) CreateFolder(r *ghttp.Request) {
	currentPath := r.GetFormString("currentPath", "")
	folderName := r.GetFormString("folderName", "")

	rootPath, err := service.LocalStorageService.GetStoragePath()
	if err != nil {
		response.JsonExit(r, 1, "Get storage path fail", nil)
	}

	if err2 := gfile.Mkdir(rootPath + gfile.Separator + currentPath + gfile.Separator + folderName); err2 != nil {
		response.JsonExit(r, 1, "Mkdir fail", nil)
	}

	response.JsonExit(r, 0, "ok")
}

// CreateFile 导入文件到本地目录
func (a *localFile) CreateFile(r *ghttp.Request) {
	currentPath := r.GetFormString("currentPath", "")
	file := r.GetUploadFile("file")

	rootPath, err := service.LocalStorageService.GetStoragePath()
	if err != nil {
		response.JsonExit(r, 1, "Get storage path fail", nil)
	}

	name, err2 := file.Save(rootPath + gfile.Separator + currentPath)
	if err2 != nil {
		response.JsonExit(r, 1, "File save fail", nil)
	}

	response.JsonExit(r, 0, "ok", name)
}

// Rename 文件重命名
func (a *localFile) Rename(r *ghttp.Request) {
	currentPath := r.GetFormString("currentPath", "")
	oldName := r.GetFormString("oldName", "")
	newName := r.GetFormString("newName", "")

	rootPath, err := service.LocalStorageService.GetStoragePath()
	if err != nil {
		response.JsonExit(r, 1, "Get storage path fail", nil)
	}

	oldPath := rootPath + gfile.Separator + currentPath + gfile.Separator + oldName
	newPath := rootPath + gfile.Separator + currentPath + gfile.Separator + newName

	err = gfile.Rename(oldPath, newPath)
	if err != nil {
		response.JsonExit(r, 1, "File rename fail", nil)
	}

	response.JsonExit(r, 0, "ok")
}

// Remove 文件删除，支持多文件
func (a *localFile) Remove(r *ghttp.Request) {
	links := r.GetFormString("files", "")

	rootPath, err := service.LocalStorageService.GetStoragePath()
	if err != nil {
		response.JsonExit(r, 1, "Get storage path fail", nil)
	}

	files := gstr.Explode(",", links)
	for _, file := range files {
		err = gfile.Remove(rootPath + gfile.Separator + file)

		if err != nil {
			response.JsonExit(r, 1, "File remove fail", nil)
		}
	}

	response.JsonExit(r, 0, "ok")
}
