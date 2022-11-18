package routes

import (
	"gitee.com/gosoft/vecshop/app/controller/user"
	"github.com/flamego/flamego"
)

func User(f *flamego.Flame) {
	f.Group("/user", func() {
		f.Get("/", user.Index.Index)
	})
}
