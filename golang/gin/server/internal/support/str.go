package support

import "github.com/gogf/gf/v2/text/gstr"

type str struct {
}

var Str = &str{}

func (a *str) Replace(origin, search, replace string, count ...int) string {
	return gstr.Replace(origin, search, replace, count...)
}
