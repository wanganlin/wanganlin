package web

import (
	"github.com/flamego/template"
	"net/http"
)

type cIndex struct {
}

var Index = cIndex{}

func (a *cIndex) Index(t template.Template, data template.Data) {
	data["Name"] = "Joe"
	t.HTML(http.StatusOK, "index")
}
