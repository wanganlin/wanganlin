package console

import (
	"context"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"

	"gitee.com/gosoft/gomall/internal/app/console/v1"
)

func (c *ControllerV1) UserQuery(ctx context.Context, req *v1.UserQueryReq) (res *v1.UserQueryRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
