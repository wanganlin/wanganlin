package user

import (
	"context"
	"gomall/api/user/v1"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"
)

func (c *ControllerV1) AddressUpdate(ctx context.Context, req *v1.AddressUpdateReq) (res *v1.AddressUpdateRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
