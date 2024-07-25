package seller

import (
	"context"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"

	"gitee.com/gosoft/gomall/internal/app/seller/v1"
)

func (c *ControllerV1) ShopQuery(ctx context.Context, req *v1.ShopQueryReq) (res *v1.ShopQueryRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
