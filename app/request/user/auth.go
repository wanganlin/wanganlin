package user

import (
	"github.com/gogf/gf/v2/frame/g"
)

type AuthLoginReq struct {
	g.Meta `path:"/login" tags:"用户" method:"post" summary:"用户登录接口"`
}
type AuthLoginRes struct {
	g.Meta `mime:"application/json" example:"string"`
}

type AuthRegisterReq struct {
	g.Meta `path:"/register" tags:"用户" method:"post" summary:"用户注册接口"`
}
type AuthRegisterRes struct {
	g.Meta `mime:"application/json" example:"string"`
}

type AuthForgotReq struct {
	g.Meta `path:"/forgot" tags:"用户" method:"post" summary:"用户忘记密码接口"`
}
type AuthForgotRes struct {
	g.Meta `mime:"application/json" example:"string"`
}

type AuthResetReq struct {
	g.Meta `path:"/reset" tags:"用户" method:"post" summary:"用户重置密码接口"`
}
type AuthResetRes struct {
	g.Meta `mime:"application/json" example:"string"`
}
