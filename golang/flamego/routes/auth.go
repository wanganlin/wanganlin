package routes

import (
	"gitee.com/gosoft/vecshop/app/controller/auth"
	"github.com/flamego/flamego"
)

func Auth(f *flamego.Flame) {
	f.Get("/register", auth.Register.ShowRegisterForm)
	f.Post("/register", auth.Register.Register)
	f.Get("/login", auth.Login.ShowLoginForm)
	f.Post("/login", auth.Login.Login)
	f.Get("/forget", auth.Forget.ShowForgetForm)
	f.Post("/forget", auth.Forget.Forget)
	f.Get("/reset", auth.Reset.ShowResetForm)
	f.Post("/reset", auth.Reset.Reset)
}
