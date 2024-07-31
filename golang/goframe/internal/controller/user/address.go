package user

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	address struct {
	}
)

var Address = &address{}

func (c *address) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("user/address.html")
	if err != nil {
		panic(err)
	}
}
