package database

import (
	"database/sql"
	"fmt"
	"github.com/juling/juling/internal/global"
	"gorm.io/driver/mysql"
	"gorm.io/gorm"
	"gorm.io/gorm/logger"
	"gorm.io/gorm/schema"
	"log"
	"time"
)

func Boot() {
	var err error

	dsn := fmt.Sprintf("%s:%s@tcp(%s:%d)/%s?charset=utf8mb4&parseTime=True&loc=Local",
		global.Config.Database.Username,
		global.Config.Database.Password,
		global.Config.Database.Host,
		global.Config.Database.Port,
		global.Config.Database.Database)

	global.DB, err = gorm.Open(mysql.New(mysql.Config{
		// DSN data source name
		DSN:                       dsn,
		DefaultStringSize:         256,   // string 类型字段的默认长度
		DisableDatetimePrecision:  true,  // 禁用 datetime 精度，MySQL 5.6 之前的数据库不支持
		DontSupportRenameIndex:    true,  // 重命名索引时采用删除并新建的方式，MySQL 5.7 之前的数据库和 MariaDB 不支持重命名索引
		DontSupportRenameColumn:   true,  // 用 `change` 重命名列，MySQL 8 之前的数据库和 MariaDB 不支持重命名列
		SkipInitializeWithVersion: false, // 根据当前 MySQL 版本自动配置
	}), &gorm.Config{
		NamingStrategy: schema.NamingStrategy{
			SingularTable: true,
		},
		Logger: logger.Default.LogMode(logger.Info),
	})

	if err != nil {
		log.Fatalf("Failed to connect database: %v", err)
	}

	sqlDb, _ := global.DB.DB()
	defer func(sqlDb *sql.DB) {
		err := sqlDb.Close()
		if err != nil {
			log.Fatalf("Failed to close sqlDb: %v", err)
		}
	}(sqlDb)

	sqlDb.SetMaxIdleConns(global.Config.Database.Datasource.MaxIdleConn)
	sqlDb.SetMaxOpenConns(global.Config.Database.Datasource.MaxOpenConn)
	sqlDb.SetConnMaxLifetime(time.Hour)
}
