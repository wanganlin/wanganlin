package logic

import (
	"context"

	"gosoft/cms/system/api/internal/svc"
	"gosoft/cms/system/api/internal/types"

	"github.com/zeromicro/go-zero/core/logx"
)

type PermissionLogic struct {
	logx.Logger
	ctx    context.Context
	svcCtx *svc.ServiceContext
}

func NewPermissionLogic(ctx context.Context, svcCtx *svc.ServiceContext) *PermissionLogic {
	return &PermissionLogic{
		Logger: logx.WithContext(ctx),
		ctx:    ctx,
		svcCtx: svcCtx,
	}
}

func (l *PermissionLogic) Permission(req *types.PermissionReq) (resp *types.PermissionRes, err error) {
	// todo: add your logic here and delete this line

	return
}
