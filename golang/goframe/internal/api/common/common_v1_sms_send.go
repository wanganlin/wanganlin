package common

import (
	"context"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"

	"gitee.com/gosoft/gomall/app/common/v1"
)

func (c *ControllerV1) SmsSend(ctx context.Context, req *v1.SmsSendReq) (res *v1.SmsSendRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
