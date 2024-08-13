package seller

import (
	"context"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"

	"gitee.com/gosoft/gomall/internal/api/seller/v1"
)

func (c *ControllerV1) ProductQuery(ctx context.Context, req *v1.ProductQueryReq) (res *v1.ProductQueryRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
