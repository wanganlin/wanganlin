package bootstrap

import (
	"gitee.com/gosoft/vecshop/app/provider"
	"github.com/flamego/flamego"
)

func Run() {
	f := flamego.Classic()
	provider.Boot(f)
	f.Run()
}
