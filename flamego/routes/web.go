package routes

import (
	"gitee.com/gosoft/vecshop/app/controller/web"
	"github.com/flamego/flamego"
)

func Web(f *flamego.Flame) {
	f.Get("/", web.Index.Index)
}
