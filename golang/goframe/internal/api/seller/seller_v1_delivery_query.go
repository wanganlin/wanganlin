package seller

import (
	"context"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"

	"gitee.com/gosoft/gomall/app/seller/v1"
)

func (c *ControllerV1) DeliveryQuery(ctx context.Context, req *v1.DeliveryQueryReq) (res *v1.DeliveryQueryRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
