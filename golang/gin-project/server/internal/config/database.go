package config

type DatabaseConfig struct {
	Host       string
	Port       int
	Username   string
	Password   string
	Database   string
	Datasource Datasource
}

type Datasource struct {
	MaxIdleConn int
	MaxOpenConn int
}
