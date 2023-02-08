package api

import "github.com/flamego/flamego"

type cIndex struct {
}

var Index = cIndex{}

func (a *cIndex) Index(f flamego.Context) string {
	return "api res..."
}
