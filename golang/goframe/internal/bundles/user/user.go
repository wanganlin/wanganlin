package user

import (
	"context"
	"github.com/gogf/gf/v2/frame/g"
	"gomall/internal/model/entity"
	"gomall/internal/repository"
	"gomall/internal/service"
)

type sUser struct{}

func init() {
	service.RegisterUser(NewUser())
}

func NewUser() *sUser {
	return &sUser{}
}

func (a *sUser) GetUserById(ctx context.Context, id int) (*entity.Users, error) {
	dao := repository.Users

	return a.GetUser(ctx, g.Map{dao.Columns().UserId: id})
}

func (a *sUser) GetUserByUsername(ctx context.Context, username string) (*entity.Users, error) {
	dao := repository.Users

	return a.GetUser(ctx, g.Map{dao.Columns().UserName: username})
}

func (a *sUser) GetUserByEmail(ctx context.Context, email string) (*entity.Users, error) {
	dao := repository.Users

	return a.GetUser(ctx, g.Map{dao.Columns().Email: email})
}

func (a *sUser) GetUserByMobile(ctx context.Context, mobile string) (*entity.Users, error) {
	dao := repository.Users

	return a.GetUser(ctx, g.Map{dao.Columns().MobilePhone: mobile})
}

func (a *sUser) GetUser(ctx context.Context, condition g.Map) (*entity.Users, error) {
	dao := repository.Users

	var user entity.Users
	err := dao.Ctx(ctx).Where(condition).Scan(&user)
	if err != nil {
		return nil, err
	}

	user.Password = ""
	user.EcSalt = ""
	user.Salt = ""

	return &user, nil
}
