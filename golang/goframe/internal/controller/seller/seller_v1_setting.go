package seller

import (
	"context"

	"github.com/gogf/gf/v2/errors/gcode"
	"github.com/gogf/gf/v2/errors/gerror"

	"gitee.com/gosoft/gomall/internal/api/seller/v1"
)

func (c *ControllerV1) Setting(ctx context.Context, req *v1.SettingReq) (res *v1.SettingRes, err error) {
	return nil, gerror.NewCode(gcode.CodeNotImplemented)
}
