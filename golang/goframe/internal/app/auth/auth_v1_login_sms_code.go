package auth

import (
	"context"
	"gomall/api/auth/v1"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"
)

func (c *ControllerV1) LoginSmsCode(ctx context.Context, req *v1.LoginSmsCodeReq) (res *v1.LoginSmsCodeRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
