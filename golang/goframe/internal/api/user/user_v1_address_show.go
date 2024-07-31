package user

import (
	"context"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"

	"gitee.com/gosoft/gomall/app/user/v1"
)

func (c *ControllerV1) AddressShow(ctx context.Context, req *v1.AddressShowReq) (res *v1.AddressShowRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
