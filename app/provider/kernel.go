package provider

import "github.com/flamego/flamego"

func Boot(f *flamego.Flame) {
	database(f)
	route(f)
	session(f)
}
