package bootstrap

import (
	"gitee.com/gosoft/vecshop/app/provider"
	"github.com/flamego/flamego"
)

func Run() {
	f := flamego.Classic()
	provider.View(f)
	provider.Session(f)
	provider.Cache(f)
	provider.Captcha(f)
	provider.Database(f)
	provider.Route(f)
	// provider.Auth(f)
	f.Run()
}
