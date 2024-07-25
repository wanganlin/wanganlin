package auth

import (
	"context"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"

	"gitee.com/gosoft/gomall/internal/api/auth/v1"
)

func (c *ControllerV1) SignupSmsCode(ctx context.Context, req *v1.SignupSmsCodeReq) (res *v1.SignupSmsCodeRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
