package user

import (
	"context"
	"github.com/gogf/gf/v2/frame/g"
	"gomall/internal/enums"
	"gomall/internal/model"
	"gomall/internal/model/entity"
	"gomall/internal/service"
	"gomall/internal/support/validx"
)

type sUserAuth struct{}

func init() {
	service.RegisterUserAuth(NewUserAuth())
}

func NewUserAuth() *sUserAuth {
	return &sUserAuth{}
}

// Login 通过账号密码获取用户信息
func (a *sUserAuth) Login(ctx context.Context, in model.UserLogin) (user *entity.Users, err error) {
	if validx.Email(in.Passport) {
		return NewUser().GetUserByEmail(ctx, in.Passport)
	} else if validx.Mobile(in.Passport) {
		return NewUser().GetUserByMobile(ctx, in.Passport)
	} else {
		return NewUser().GetUserByUsername(ctx, in.Passport)
	}
}

// LoginBySmsCode 通过短信验证码获取用户信息
func (a *sUserAuth) LoginBySmsCode(ctx context.Context, in model.UserSmsCodeLogin) (user *entity.Users, err error) {
	return nil, nil
}

// LoginUsingId 通过ID获取用户信息
func (a *sUserAuth) LoginUsingId(ctx context.Context, id int) (user *entity.Users, err error) {
	return NewUser().GetUserById(ctx, id)
}

// IsLogin 用户是否登录
func (a *sUserAuth) IsLogin(ctx context.Context) (isLogin bool, err error) {
	user, err := g.RequestFromCtx(ctx).Session.Get(enums.UserTypeBuyer.String())
	if err != nil {
		return false, err
	}

	return user != nil, nil
}

// Session 设置用户的会话状态
func (a *sUserAuth) Session(ctx context.Context, user *entity.Users, remember bool) (err error) {
	return g.RequestFromCtx(ctx).Session.Set(enums.UserTypeBuyer.String(), user)
}

// Token 获取认证用户的JWT
func (a *sUserAuth) Token(ctx context.Context, user *entity.Users) (token string, err error) {
	return "", nil
}
