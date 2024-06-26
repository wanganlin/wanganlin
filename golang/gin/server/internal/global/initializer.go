package global

import (
	"fmt"
	"github.com/fsnotify/fsnotify"
	"github.com/gogf/gf/v2/os/gfile"
	"github.com/golang-module/carbon/v2"
	"github.com/juling/juling/internal/config"
	"github.com/spf13/viper"
	"gorm.io/gorm"
	"log"
	"os"
	"path/filepath"
)

var (
	BasePath string
	Config   *config.Config
	DB       *gorm.DB
	// Log    *log.Logger
)

// Boot 初始化应用配置
func Boot() {
	baseInit()
	configInit()
	carbonInit()
}

// getCurrentPath 获取当前执行路径
func getCurrentPath() (string, error) {
	return os.Getwd()
}

// findGoModDir 递归查找 go.mod 文件
func findGoModDir(dir string) (string, error) {
	for {
		if _, err := os.Stat(filepath.Join(dir, "go.mod")); err == nil {
			return dir, nil
		}
		parentDir := filepath.Dir(dir)
		if parentDir == dir {
			return "", fmt.Errorf("go.mod not found")
		}
		dir = parentDir
	}
}

func baseInit() {
	currentPath, err := getCurrentPath()
	if err != nil {
		log.Fatalf("Error getting current path: %v", err)
	}

	goModDir, err := findGoModDir(currentPath)
	if err != nil {
		log.Fatalf("Error finding go.mod directory: %v", err)
	}

	BasePath = goModDir
}

// configInit 加载配置文件，并注入到全局对象
func configInit() {
	// 文件配置
	configFile := BasePath + "/conf/config.yaml"
	if !gfile.Exists(configFile) {
		panic("Error loading config.yaml file")
	}

	// 读取配置文件
	viper.AddConfigPath(BasePath + "/conf")
	viper.SetConfigName("config")
	viper.SetConfigType("yaml")
	if err := viper.ReadInConfig(); err != nil {
		panic(fmt.Sprintf("Error reading config file, %s", err))
	}

	// 监控配置文件变化
	viper.WatchConfig()
	viper.OnConfigChange(func(e fsnotify.Event) {
		// 重新映射配置到结构体
		if err := viper.Unmarshal(&Config); err != nil {
			panic(fmt.Sprintf("Unable to decode into struct, %v", err))
		}
	})

	// 将配置映射到结构体
	if err := viper.Unmarshal(&Config); err != nil {
		panic(fmt.Sprintf("Unable to decode into struct, %v", err))
	}
}

// carbonInit 初始化日期时间组件
func carbonInit() {
	carbon.SetDefault(carbon.Default{
		Layout:       carbon.DateTimeLayout,
		Timezone:     carbon.PRC,
		WeekStartsAt: carbon.Monday,
		Locale:       "zh-CN",
	})
}
