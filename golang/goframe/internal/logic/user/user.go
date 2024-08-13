package user

import (
	"context"
	"gitee.com/gosoft/gomall/internal/model"
	"gitee.com/gosoft/gomall/internal/service"
)

type sUser struct{}

func init() {
	service.RegisterUser(NewUser())
}

func NewUser() *sUser {
	return &sUser{}
}

func (a *sUser) GetUserById(ctx context.Context, in model.User) (err error) {
	return nil
}
