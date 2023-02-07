package routes

import (
	"gitee.com/gosoft/vecshop/app/controller/console"
	"github.com/flamego/flamego"
)

func Console(f *flamego.Flame) {
	f.Group("/console", func() {
		f.Get("/", console.Index.Index)
	})
}
