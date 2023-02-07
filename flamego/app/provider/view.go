package provider

import (
	"github.com/flamego/flamego"
	"github.com/flamego/template"
)

func View(f *flamego.Flame) {
	f.Use(template.Templater(template.Options{
		Directory: "resources/views",
	}))
}
