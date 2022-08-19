package console

import (
	"github.com/gogf/gf/v2/frame/g"
)

type AuthLoginReq struct {
	g.Meta `path:"/login" tags:"管理" method:"post" summary:"管理登录接口"`
}
type AuthLoginRes struct {
	g.Meta `mime:"application/json" example:"string"`
}

type AuthForgotReq struct {
	g.Meta `path:"/forgot" tags:"管理" method:"post" summary:"忘记密码接口"`
}
type AuthForgotRes struct {
	g.Meta `mime:"application/json" example:"string"`
}

type AuthResetReq struct {
	g.Meta `path:"/reset" tags:"管理" method:"post" summary:"重置密码接口"`
}
type AuthResetRes struct {
	g.Meta `mime:"application/json" example:"string"`
}
