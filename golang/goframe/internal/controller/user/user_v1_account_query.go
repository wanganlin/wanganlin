package user

import (
	"context"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"

	"gitee.com/gosoft/gomall/internal/app/user/v1"
)

func (c *ControllerV1) AccountQuery(ctx context.Context, req *v1.AccountQueryReq) (res *v1.AccountQueryRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
