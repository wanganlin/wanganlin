package engine

import (
	"github.com/gogf/gf/frame/g"
	"github.com/gogf/gf/os/gfile"
	"github.com/gogf/gf/os/gfsnotify"
	"limsctl/service"
)

// Watcher 监听目录文件
func Watcher(path string) {
	_, err := gfsnotify.Add(path, func(event *gfsnotify.Event) {
		if event.IsRemove() || event.IsRename() {
			service.SyncFileService.DeleteByFilePath(event.Path)
		}

		if event.IsCreate() {
			if gfile.IsFile(event.Path) {
				service.SyncFileService.Create(event.Path)
			}
		}
	})

	if err != nil {
		g.Log().Errorf("文件观察失败 %s", err)
	} // else {
	//	select {} // 阻塞，不退出
	//}
}
