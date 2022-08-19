package response

import (
	"context"

	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/gogf/gf/v2/os/gview"
	"github.com/wanganlin/goframe/app/support"
)

// Display 模板显示
func Display(ctx context.Context, tpl string, params ...gview.Params) {
	var err error
	var r = g.RequestFromCtx(ctx)
	params = append(params, g.Map{
		"csrf_token": support.GetResponseCookie(r, "_csrf"),
	})
	err = r.Response.WriteTpl(tpl, params...)
	if err != nil {
		return
	}
}

// Fetch 获取模板内容
func Fetch(r *ghttp.Request, tpl string) {
	// TODO
}
