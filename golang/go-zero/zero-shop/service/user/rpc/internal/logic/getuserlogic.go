package logic

import (
	"context"

	"gosoft/shop/service/user/rpc/internal/svc"
	"gosoft/shop/service/user/rpc/types/user"

	"github.com/zeromicro/go-zero/core/logx"
)

type GetUserLogic struct {
	ctx    context.Context
	svcCtx *svc.ServiceContext
	logx.Logger
}

func NewGetUserLogic(ctx context.Context, svcCtx *svc.ServiceContext) *GetUserLogic {
	return &GetUserLogic{
		ctx:    ctx,
		svcCtx: svcCtx,
		Logger: logx.WithContext(ctx),
	}
}

func (l *GetUserLogic) GetUser(in *user.IdReq) (*user.UserInfoReply, error) {
	// todo: add your logic here and delete this line

	return &user.UserInfoReply{}, nil
}
