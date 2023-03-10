// ==========================================================================
// Code generated by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package service

type IUserAuth interface {
	Login(id int) int
}

var localUserAuth IUserAuth

func UserAuth() IUserAuth {
	if localUserAuth == nil {
		panic("implement not found for interface IUserAuth, forgot register?")
	}
	return localUserAuth
}

func RegisterUserAuth(i IUserAuth) {
	localUserAuth = i
}
