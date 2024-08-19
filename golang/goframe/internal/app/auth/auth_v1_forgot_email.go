package auth

import (
	"context"
	"gomall/api/auth/v1"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"
)

func (c *ControllerV1) ForgotEmail(ctx context.Context, req *v1.ForgotEmailReq) (res *v1.ForgotEmailRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
