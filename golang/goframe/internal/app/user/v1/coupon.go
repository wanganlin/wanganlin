package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	CouponQueryReq struct {
		g.Meta `path:"/coupon" tags:"模块" method:"post" summary:""`
	}

	CouponQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)
