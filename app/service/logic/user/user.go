package user

import "github.com/wanganlin/goframe/app/service"

type sUser struct {
}

func init() {
	service.RegisterUser(NewUser())
}

func NewUser() *sUser {
	return &sUser{}
}

func (s *sUser) Name(id int) int {
	return id
}
