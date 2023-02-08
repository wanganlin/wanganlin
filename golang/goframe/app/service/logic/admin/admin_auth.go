package user

import "github.com/wanganlin/goframe/app/service"

type sAdminAuth struct {
}

func init() {
	service.RegisterAdminAuth(NewAdminAuth())
}

func NewAdminAuth() *sAdminAuth {
	return &sAdminAuth{}
}

func (s *sAdminAuth) Login(id int) int {
	return id
}
