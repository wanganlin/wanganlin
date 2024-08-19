package user

import (
	"context"
	"gomall/api/user/v1"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"
)

func (c *ControllerV1) CouponQuery(ctx context.Context, req *v1.CouponQueryReq) (res *v1.CouponQueryRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
