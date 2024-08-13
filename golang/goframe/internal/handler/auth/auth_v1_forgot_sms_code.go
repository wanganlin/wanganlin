package auth

import (
	"context"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"

	"gitee.com/gosoft/gomall/internal/api/auth/v1"
)

func (c *ControllerV1) ForgotSmsCode(ctx context.Context, req *v1.ForgotSmsCodeReq) (res *v1.ForgotSmsCodeRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
