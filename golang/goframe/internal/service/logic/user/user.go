package user

import (
	"context"

	"gitee.com/gosoft/gomall/internal/model"
	dao "gitee.com/gosoft/gomall/internal/repository"
	"gitee.com/gosoft/gomall/internal/service"
)

type sUser struct {
}

func init() {
	service.RegisterUser(NewUser())
}

func NewUser() *sUser {
	return &sUser{}
}

func (s *sUser) FindById(ctx context.Context, id int) (out *model.UserGetProfileOutput, err error) {
	if err := dao.User.Ctx(ctx).Where(dao.User.Columns().Id, id).Scan(&out); err != nil {
		return nil, err
	}
	// 需要判断nil是否存在,不存在需要判断为空,以防后续nil
	if out == nil {
		return nil, nil
	}
	return out, nil
}
