package provider

import (
	"gitee.com/gosoft/vecshop/routes"
	"github.com/flamego/flamego"
)

func Route(f *flamego.Flame) {
	routes.Api(f)
	routes.Auth(f)
	routes.Console(f)
	routes.User(f)
	routes.Web(f)
}
