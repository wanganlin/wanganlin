package user

import "github.com/wanganlin/goframe/app/service"

type sAdmin struct {
}

func init() {
	service.RegisterAdmin(NewAdmin())
}

func NewAdmin() *sAdmin {
	return &sAdmin{}
}

func (s *sAdmin) Name(id int) int {
	return id
}
