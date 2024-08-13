package user

import (
	"context"
	"gitee.com/gosoft/gomall/internal/model"
	"gitee.com/gosoft/gomall/internal/service"
)

type sAddress struct{}

func init() {
	service.RegisterAddress(NewAddress())
}

func NewAddress() *sAddress {
	return &sAddress{}
}

func (a *sAddress) GetAddressById(ctx context.Context, in model.User) (err error) {
	return nil
}
