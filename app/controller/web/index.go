package web

import "github.com/flamego/flamego"

type cIndex struct {
}

var Index = cIndex{}

func (a *cIndex) Index(f flamego.Context) string {
	return "web res..."
}
