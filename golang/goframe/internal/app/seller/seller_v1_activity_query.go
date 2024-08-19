package seller

import (
	"context"
	"gomall/api/seller/v1"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"
)

func (c *ControllerV1) ActivityQuery(ctx context.Context, req *v1.ActivityQueryReq) (res *v1.ActivityQueryRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
