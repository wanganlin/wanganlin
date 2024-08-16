package common

import (
	"context"
	"gitee.com/gosoft/gomall/internal/api/common/v1"
	"gitee.com/gosoft/gomall/internal/bundles/captcha"
)

func (c *ControllerV1) Captcha(ctx context.Context, req *v1.CaptchaReq) (res *v1.CaptchaRes, err error) {
	id, b64s, _, err2 := captcha.Generate()
	if err2 != nil {
		return nil, err2
	}

	resp := &v1.CaptchaRes{
		Id:     id,
		Base64: b64s,
	}

	return resp, nil
}
