package logic

import (
	"context"

	"gosoft/cms/system/api/internal/svc"
	"gosoft/cms/system/api/internal/types"

	"github.com/zeromicro/go-zero/core/logx"
)

type AdLogic struct {
	logx.Logger
	ctx    context.Context
	svcCtx *svc.ServiceContext
}

func NewAdLogic(ctx context.Context, svcCtx *svc.ServiceContext) *AdLogic {
	return &AdLogic{
		Logger: logx.WithContext(ctx),
		ctx:    ctx,
		svcCtx: svcCtx,
	}
}

func (l *AdLogic) Ad(req *types.AdReq) (resp *types.AdRes, err error) {
	// todo: add your logic here and delete this line

	return
}
