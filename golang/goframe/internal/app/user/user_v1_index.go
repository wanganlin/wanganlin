package user

import (
	"context"
	"gomall/api/user/v1"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"
)

func (c *ControllerV1) Index(ctx context.Context, req *v1.IndexReq) (res *v1.IndexRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
