package auth

import (
	"context"
	"gomall/api/auth/v1"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"
)

func (c *ControllerV1) ForgotSmsCode(ctx context.Context, req *v1.ForgotSmsCodeReq) (res *v1.ForgotSmsCodeRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
