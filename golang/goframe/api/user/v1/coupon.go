package v1

import (
	"github.com/gogf/gf/v2/net/ghttp"
)

type (
	couponHandler struct{}
)

var Coupon = &couponHandler{}

func (a *couponHandler) Index(r *ghttp.Request) {
	err := r.Response.WriteTpl("user/coupon.html")
	if err != nil {
		return
	}
}
