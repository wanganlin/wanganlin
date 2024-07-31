package controller

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	category struct {
	}
)

var Category = &category{}

func (c *category) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("category.html")
	if err != nil {
		panic(err)
	}
}
