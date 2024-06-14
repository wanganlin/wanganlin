package config

import (
	"github.com/fsnotify/fsnotify"
	"github.com/spf13/viper"
	"log"
	"strings"
)

type Config struct {
	App      AppConfig
	Logging  LogConfig
	Server   ServerConfig
	Database DatabaseConfig
	Redis    RedisConfig
	Cache    CacheConfig
}

type AppConfig struct {
	Name  string
	Debug bool
}

type LogConfig struct {
	Level string
}

type ServerConfig struct {
	Port         int
	ReadTimeout  int
	WriteTimeout int
}

type DatabaseConfig struct {
	Host     string
	Port     int
	Username string
	Password string
}

type RedisConfig struct {
	Host     string
	Port     int
	Username string
	Password string
	Database int
}

type CacheConfig struct {
	Database int
	Prefix   string
}

var Cfg Config

func InitConfig() {
	// 环境变量配置
	// viper.SetEnvPrefix("myapp") // 环境变量前缀
	viper.AutomaticEnv()
	viper.SetEnvKeyReplacer(strings.NewReplacer(".", "_"))

	// 设置默认值
	viper.SetDefault("server.port", 8080)
	viper.SetDefault("logging.level", "info")

	// 设置配置文件路径
	viper.AddConfigPath("conf")

	// 读取配置文件
	viper.SetConfigName("config")
	viper.SetConfigType("yaml")
	if err := viper.ReadInConfig(); err != nil {
		log.Fatalf("Error reading config file, %s", err)
	}

	// 将配置映射到结构体
	if err := viper.Unmarshal(&Cfg); err != nil {
		log.Fatalf("Unable to decode into struct, %v", err)
	}

	// 监控配置文件变化
	viper.WatchConfig()
	viper.OnConfigChange(func(e fsnotify.Event) {
		log.Printf("Config file changed: %s", e.Name)

		// 重新映射配置到结构体
		if err := viper.Unmarshal(&Cfg); err != nil {
			log.Fatalf("Unable to decode into struct, %v", err)
		}
	})
}
