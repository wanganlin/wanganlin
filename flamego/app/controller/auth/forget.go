package auth

import (
	"github.com/flamego/captcha"
	"github.com/flamego/flamego"
	"github.com/flamego/template"
	"net/http"
)

type cForget struct {
}

var Forget = cForget{}

func (a *cForget) ShowForgetForm(t template.Template, data template.Data, captcha captcha.Captcha) {
	data["Captcha"] = captcha.HTML()
	t.HTML(http.StatusOK, "auth/forget")
}

func (a *cForget) Forget(c flamego.Context, captcha captcha.Captcha) {
	if !captcha.ValidText(c.Request().FormValue("captcha")) {
		c.ResponseWriter().WriteHeader(http.StatusBadRequest)
		_, _ = c.ResponseWriter().Write([]byte(http.StatusText(http.StatusBadRequest)))
	} else {
		c.ResponseWriter().WriteHeader(http.StatusOK)
		_, _ = c.ResponseWriter().Write([]byte(http.StatusText(http.StatusOK)))
	}
}
