// ==========================================================================
// Code generated by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package service

import (
	"context"

	"gitee.com/gosoft/gomall/internal/model"
)

type IUser interface {
	FindById(ctx context.Context, id int) (out *model.UserGetProfileOutput, err error)
}

var localUser IUser

func User() IUser {
	if localUser == nil {
		panic("implement not found for interface IUser, forgot register?")
	}
	return localUser
}

func RegisterUser(i IUser) {
	localUser = i
}