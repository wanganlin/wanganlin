package config

type Config struct {
	App        AppConfig
	Cache      CacheConfig
	Cookie     CookieConfig
	Database   DatabaseConfig
	Filesystem FilesystemConfig
	Logging    LogConfig
	Mail       MailConfig
	Queue      QueueConfig
	Redis      RedisConfig
	Server     ServerConfig
	Session    SessionConfig
	View       ViewConfig
}
