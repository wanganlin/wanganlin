package auth

import (
	"github.com/flamego/captcha"
	"github.com/flamego/flamego"
	"github.com/flamego/template"
	"net/http"
)

type cReset struct {
}

var Reset = cReset{}

func (a *cReset) ShowResetForm(t template.Template, data template.Data, captcha captcha.Captcha) {
	data["Captcha"] = captcha.HTML()
	t.HTML(http.StatusOK, "auth/reset")
}

func (a *cReset) Reset(c flamego.Context, captcha captcha.Captcha) {
	if !captcha.ValidText(c.Request().FormValue("captcha")) {
		c.ResponseWriter().WriteHeader(http.StatusBadRequest)
		_, _ = c.ResponseWriter().Write([]byte(http.StatusText(http.StatusBadRequest)))
	} else {
		c.ResponseWriter().WriteHeader(http.StatusOK)
		_, _ = c.ResponseWriter().Write([]byte(http.StatusText(http.StatusOK)))
	}
}
