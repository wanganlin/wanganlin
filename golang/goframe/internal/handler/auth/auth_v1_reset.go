package auth

import (
	"context"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"

	"gomall/internal/api/auth/v1"
)

func (c *ControllerV1) Reset(ctx context.Context, req *v1.ResetReq) (res *v1.ResetRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
