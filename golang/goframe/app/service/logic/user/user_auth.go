package user

import "github.com/wanganlin/goframe/app/service"

type sUserAuth struct {
}

func init() {
	service.RegisterUserAuth(NewUserAuth())
}

func NewUserAuth() *sUserAuth {
	return &sUserAuth{}
}

func (s *sUserAuth) Login(id int) int {
	return id
}
