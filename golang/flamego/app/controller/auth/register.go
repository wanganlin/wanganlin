package auth

import (
	"github.com/flamego/captcha"
	"github.com/flamego/flamego"
	"github.com/flamego/template"
	"net/http"
)

type cRegister struct {
}

var Register = cRegister{}

func (a *cRegister) ShowRegisterForm(t template.Template, data template.Data, captcha captcha.Captcha) {
	data["Captcha"] = captcha.HTML()
	t.HTML(http.StatusOK, "auth/register")
}

func (a *cRegister) Register(c flamego.Context, captcha captcha.Captcha) {
	if !captcha.ValidText(c.Request().FormValue("captcha")) {
		c.ResponseWriter().WriteHeader(http.StatusBadRequest)
		_, _ = c.ResponseWriter().Write([]byte(http.StatusText(http.StatusBadRequest)))
	} else {
		c.ResponseWriter().WriteHeader(http.StatusOK)
		_, _ = c.ResponseWriter().Write([]byte(http.StatusText(http.StatusOK)))
	}
}
