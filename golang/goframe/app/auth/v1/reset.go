package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	ResetReq struct {
		g.Meta     `path:"/reset" tags:"认证模块" method:"post" summary:"重设新密码"`
		ResetToken string `v:"required#请输入重置令牌"`
		Password   string `v:"required|password#请输入登录密码|密码格式不正确"`
	}

	ResetRes struct {
		g.Meta `mime:"application/json"`
		Token  string
	}
)
