package controller

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	catalog struct {
	}
)

var Catalog = &catalog{}

func (c *catalog) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("catalog.html")
	if err != nil {
		panic(err)
	}
}
