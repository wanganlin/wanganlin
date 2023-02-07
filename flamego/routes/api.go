package routes

import (
	"gitee.com/gosoft/vecshop/app/controller/api"
	"github.com/flamego/flamego"
)

func Api(f *flamego.Flame) {
	f.Group("/api", func() {
		f.Get("/", api.Index.Index)
	})
}
