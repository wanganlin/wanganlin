package provider

import (
	"github.com/flamego/auth"
	"github.com/flamego/flamego"
)

func Auth(f *flamego.Flame) {
	f.Use(auth.Bearer("Secret"))
}
