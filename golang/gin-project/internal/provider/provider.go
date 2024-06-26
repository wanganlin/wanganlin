package provider

import (
	"github.com/juling/juling/internal/foundation/database"
)

// Register 注册Infra组件
func Register() {
	database.Boot()
}
