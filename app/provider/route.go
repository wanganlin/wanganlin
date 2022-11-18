package provider

import (
	"gitee.com/gosoft/vecshop/routes"
	"github.com/flamego/flamego"
)

func route(f *flamego.Flame) {
	routes.Api(f)
	routes.Console(f)
	routes.User(f)
	routes.Web(f)
}
