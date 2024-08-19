package user

import (
	"context"
	"gomall/api/user/v1"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"
)

func (c *ControllerV1) AccountQuery(ctx context.Context, req *v1.AccountQueryReq) (res *v1.AccountQueryRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
