package user

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	index struct {
	}
)

var Index = &index{}

func (c *index) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("user/index.html")
	if err != nil {
		panic(err)
	}
}
