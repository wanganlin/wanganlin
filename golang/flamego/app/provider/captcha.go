package provider

import (
	"github.com/flamego/captcha"
	"github.com/flamego/flamego"
)

func Captcha(f *flamego.Flame) {
	f.Use(captcha.Captchaer())
}
