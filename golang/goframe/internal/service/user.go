// ================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// You can delete these comments if you wish manually maintain this interface file.
// ================================================================================

package service

import (
	"context"

	"gitee.com/gosoft/gomall/internal/model"
	"gitee.com/gosoft/gomall/internal/model/entity"
	"github.com/gogf/gf/v2/frame/g"
)

type (
	IUserAddress interface {
		GetAddressById(ctx context.Context, in model.User) (err error)
	}
	IUserAuth interface {
		// Login 通过账号密码获取用户信息
		Login(ctx context.Context, in model.UserLogin) (user *entity.Users, err error)
		// LoginBySmsCode 通过短信验证码获取用户信息
		LoginBySmsCode(ctx context.Context, in model.UserSmsCodeLogin) (user *entity.Users, err error)
		// LoginUsingId 通过ID获取用户信息
		LoginUsingId(ctx context.Context, id int) (user *entity.Users, err error)
		// IsLogin 用户是否登录
		IsLogin(ctx context.Context) (isLogin bool, err error)
		// Session 设置用户的会话状态
		Session(ctx context.Context, user *entity.Users, remember bool) (err error)
		// Token 获取认证用户的JWT
		Token(ctx context.Context, user *entity.Users) (token string, err error)
	}
	IUser interface {
		GetUserById(ctx context.Context, id int) (*entity.Users, error)
		GetUserByUsername(ctx context.Context, username string) (*entity.Users, error)
		GetUserByEmail(ctx context.Context, email string) (*entity.Users, error)
		GetUserByMobile(ctx context.Context, mobile string) (*entity.Users, error)
		GetUser(ctx context.Context, condition g.Map) (*entity.Users, error)
	}
)

var (
	localUserAddress IUserAddress
	localUserAuth    IUserAuth
	localUser        IUser
)

func UserAddress() IUserAddress {
	if localUserAddress == nil {
		panic("implement not found for interface IUserAddress, forgot register?")
	}
	return localUserAddress
}

func RegisterUserAddress(i IUserAddress) {
	localUserAddress = i
}

func UserAuth() IUserAuth {
	if localUserAuth == nil {
		panic("implement not found for interface IUserAuth, forgot register?")
	}
	return localUserAuth
}

func RegisterUserAuth(i IUserAuth) {
	localUserAuth = i
}

func User() IUser {
	if localUser == nil {
		panic("implement not found for interface IUser, forgot register?")
	}
	return localUser
}

func RegisterUser(i IUser) {
	localUser = i
}
