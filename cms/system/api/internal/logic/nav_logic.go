package logic

import (
	"context"

	"gosoft/cms/system/api/internal/svc"
	"gosoft/cms/system/api/internal/types"

	"github.com/zeromicro/go-zero/core/logx"
)

type NavLogic struct {
	logx.Logger
	ctx    context.Context
	svcCtx *svc.ServiceContext
}

func NewNavLogic(ctx context.Context, svcCtx *svc.ServiceContext) *NavLogic {
	return &NavLogic{
		Logger: logx.WithContext(ctx),
		ctx:    ctx,
		svcCtx: svcCtx,
	}
}

func (l *NavLogic) Nav(req *types.NavReq) (resp *types.NavRes, err error) {
	// todo: add your logic here and delete this line

	return
}
