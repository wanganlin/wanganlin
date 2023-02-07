package main

import (
	"fmt"
	"github.com/gogf/gf/container/gqueue"
	"github.com/gogf/gf/frame/g"
	"github.com/gogf/gf/os/gfile"
	"github.com/gogf/gf/os/gtimer"
	"github.com/gogf/gf/util/gconv"
	"gorm.io/driver/sqlite"
	"gorm.io/gorm"
	"limsctl/engine"
	"limsctl/model"
	"limsctl/service"
	"time"
)

func init() {
	initConfig()
	initRuntime()
	initDatabase()
}

func main() {
	/*s := g.Server()
	s.Group("/api", func(group *ghttp.RouterGroup) {
		group.Middleware(middlewareCORS)
		group.ALL("/local", controller.LocalFileController)
		group.ALL("/setting", controller.SettingController)
		group.ALL("/sync", controller.SyncFileController)
	})
	s.SetPort(9508)
	s.Run()*/
	startWatcher()
	startUpload()
}

// middlewareCORS 允许跨域
/*func middlewareCORS(r *ghttp.Request) {
	r.Response.CORSDefault()
	r.Middleware.Next()
}*/

// watcher 文件监听
func startWatcher() {
	storagePath, err := service.LocalStorageService.GetStoragePath()
	if err != nil {
		panic(err)
	}

	engine.Watcher(storagePath)
}

// startUpload 提交文件
func startUpload() {
	var files []model.File

	q := gqueue.New()

	// 数据生产者，每隔10秒往队列写数据
	gtimer.SetInterval(time.Second*10, func() {
		model.DB.Where("status = ? and error_counter < 3", 0).Find(&files)
		for _, v := range files {
			q.Push(v.Path)
			fmt.Println("Push:", v.Path)
		}
	})

	// 消费者，不停读取队列数据并输出到终端
	var file model.File
	for {
		if v := q.Pop(); v != nil {
			fmt.Println(" Pop:", v)
			filePath := gconv.String(v)
			if err := service.UploadService.UploadFile(filePath, ""); err != nil {
				// 更新错误计数器
				model.DB.Where("path = ?", filePath).First(&file)
				file.ErrorCounter++
				model.DB.Save(&file)

				g.Log().Errorf("文件上传错误：%s", err)
			} else {
				g.Log().Info("文件上传成功")
			}
		} else {
			break
		}
	}
}

// initRuntime 初始化 Runtime 目录
func initRuntime() {
	cachePath := service.LocalStorageService.GetCachePath()
	if !gfile.Exists(cachePath) {
		err := gfile.Mkdir(cachePath)
		if err != nil {
			return
		}
	}

	err := g.Log().SetConfigWithMap(g.Map{
		"path": "logs",
	})
	if err != nil {
		return
	}
}

// initDatabase 初始化链接
func initDatabase() {
	databasePath := service.LocalStorageService.GetDatabasePath()
	sqliteFile := databasePath + "sync.db"

	if !gfile.Exists(databasePath) {
		err := gfile.Mkdir(databasePath)
		if err != nil {
			return
		}
		if _, err := gfile.Create(sqliteFile); err != nil {
			return
		}
	}

	db, err := gorm.Open(sqlite.Open(sqliteFile), &gorm.Config{})
	if err != nil {
		panic("failed to connect database")
	}
	err = db.AutoMigrate(&model.File{})
	if err != nil {
		panic("database migrate failed")
	}
	model.DB = db
}

func initConfig() {
	g.Cfg().SetFileName("config.json")
}
