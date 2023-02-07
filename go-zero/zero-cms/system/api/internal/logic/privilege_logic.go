package logic

import (
	"context"

	"gosoft/cms/system/api/internal/svc"
	"gosoft/cms/system/api/internal/types"

	"github.com/zeromicro/go-zero/core/logx"
)

type PrivilegeLogic struct {
	logx.Logger
	ctx    context.Context
	svcCtx *svc.ServiceContext
}

func NewPrivilegeLogic(ctx context.Context, svcCtx *svc.ServiceContext) *PrivilegeLogic {
	return &PrivilegeLogic{
		Logger: logx.WithContext(ctx),
		ctx:    ctx,
		svcCtx: svcCtx,
	}
}

func (l *PrivilegeLogic) Privilege(req *types.PrivilegeReq) (resp *types.PrivilegeRes, err error) {
	// todo: add your logic here and delete this line

	return
}
