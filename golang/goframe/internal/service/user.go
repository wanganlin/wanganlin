// ================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// You can delete these comments if you wish manually maintain this interface file.
// ================================================================================

package service

import (
	"context"

	"gitee.com/gosoft/gomall/internal/model"
)

type (
	IAddress interface {
		GetAddressById(ctx context.Context, in model.User) (err error)
	}
	IUser interface {
		GetUserById(ctx context.Context, in model.User) (err error)
	}
)

var (
	localAddress IAddress
	localUser    IUser
)

func Address() IAddress {
	if localAddress == nil {
		panic("implement not found for interface IAddress, forgot register?")
	}
	return localAddress
}

func RegisterAddress(i IAddress) {
	localAddress = i
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
