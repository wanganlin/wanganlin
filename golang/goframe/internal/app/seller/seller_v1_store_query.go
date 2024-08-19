package seller

import (
	"context"
	"gomall/api/seller/v1"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"
)

func (c *ControllerV1) StoreQuery(ctx context.Context, req *v1.StoreQueryReq) (res *v1.StoreQueryRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
