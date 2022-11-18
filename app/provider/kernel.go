package provider

import (
	"github.com/flamego/flamego"
	"github.com/flamego/template"
)

func Boot(f *flamego.Flame) {
	f.Use(template.Templater(template.Options{
		Directory: "resources/views",
	}))

	database(f)
	route(f)
	session(f)

}
