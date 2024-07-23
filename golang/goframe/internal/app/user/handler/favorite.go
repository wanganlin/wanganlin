package handler

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	favoriteHandler struct{}
)

var Favorite = &favoriteHandler{}

func (a *favoriteHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("user/favorite.html")
	if err != nil {
		return
	}
}
