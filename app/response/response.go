package response

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/net/ghttp"
	"github.com/gogf/gf/v2/os/gview"
	"github.com/wanganlin/goframe/app/support"
)

// JsonResponse 数据返回通用JSON数据结构
type JsonResponse struct {
	Code    int         `json:"code"`    // 错误码((0:成功, 1:失败, >1:错误码))
	Message string      `json:"message"` // 提示信息
	Data    interface{} `json:"data"`    // 返回数据(业务接口定义具体数据结构)
}

// Json 标准返回结果数据结构封装。
func Json(r *ghttp.Request, code int, message string, data ...interface{}) {
	responseData := interface{}(nil)
	if len(data) > 0 {
		responseData = data[0]
	}

	r.Response.WriteJson(JsonResponse{
		Code:    code,
		Message: message,
		Data:    responseData,
	})
}

// JsonExit 返回JSON数据并退出当前HTTP执行函数。
func JsonExit(r *ghttp.Request, err int, msg string, data ...interface{}) {
	Json(r, err, msg, data...)
	r.Exit()
}

// Display 模板显示
func Display(r *ghttp.Request, tpl string, params ...gview.Params) {
	var err error
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
