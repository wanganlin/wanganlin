package controller

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	index struct {
	}
)

var Index = &index{}

func (c *index) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("index.html")
	if err != nil {
		panic(err)
	}
}

func (c *index) Swagger(r *ghttp.Request) {
	err := r.Response.WriteTpl("swagger.html")
	if err != nil {
		panic(err)
	}
}
