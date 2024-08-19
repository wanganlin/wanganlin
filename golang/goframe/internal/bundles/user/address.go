package user

import (
	"context"
	"gomall/internal/model"
	"gomall/internal/service"
)

type sUserAddress struct{}

func init() {
	service.RegisterUserAddress(NewUserAddress())
}

func NewUserAddress() *sUserAddress {
	return &sUserAddress{}
}

func (a *sUserAddress) GetAddressById(ctx context.Context, in model.User) (err error) {
	return nil
}
