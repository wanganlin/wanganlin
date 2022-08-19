package user

import (
	"context"
)

type sUser struct{}

func init() {
}

func New() *sUser {
	return &sUser{}
}

func (a *sUser) get(ctx context.Context, id int) int {
	return id
}
