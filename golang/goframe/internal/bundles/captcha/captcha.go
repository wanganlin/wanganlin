package captcha

import (
	"github.com/mojocn/base64Captcha"
)

// configBody json request body.
type configBody struct {
	Id            string
	CaptchaType   string
	VerifyValue   string
	DriverAudio   *base64Captcha.DriverAudio
	DriverString  *base64Captcha.DriverString
	DriverChinese *base64Captcha.DriverChinese
	DriverMath    *base64Captcha.DriverMath
	DriverDigit   *base64Captcha.DriverDigit
}

var store = base64Captcha.DefaultMemStore

// Generate 生成图片验证码
func Generate() (id, b64s, answer string, err error) {
	param := configBody{
		CaptchaType: "string",
		DriverString: &base64Captcha.DriverString{
			Height:          40,
			Width:           120,
			NoiseCount:      10,
			ShowLineOptions: 2,
			Length:          4,
			Source:          "ABCDEFGHIJKLMNPQRSTUVWXYZ123456789",
			//BgColor:         &color.RGBA{R: 0, G: 0, B: 0, A: 0},
			//Fonts:           []string{"wqy-microhei.ttc"},
		},
	}

	var driver base64Captcha.Driver

	//choose driver
	switch param.CaptchaType {
	case "audio":
		driver = param.DriverAudio
	case "string":
		driver = param.DriverString.ConvertFonts()
	case "math":
		driver = param.DriverMath.ConvertFonts()
	case "chinese":
		driver = param.DriverChinese.ConvertFonts()
	default:
		driver = param.DriverDigit
	}

	c := base64Captcha.NewCaptcha(driver, store)
	return c.Generate()
}

// Verify 校验图片验证码
func Verify(uuid, verifyValue string) bool {
	return store.Verify(uuid, verifyValue, true)
}
