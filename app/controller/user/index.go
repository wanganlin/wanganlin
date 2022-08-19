package user

import (
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/gogf/gf/v2/os/gfile"
)

type cIndex struct{}

var Index = cIndex{}

func (a *cIndex) Index(r *ghttp.Request) {
	content := gfile.GetContents("public/static/user/index.html")
	if err := r.Response.WriteTplContent(content); err != nil {
		panic(err)
	}
}
