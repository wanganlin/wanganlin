package logic

import (
	"context"

	"gosoft/cms/content/api/internal/svc"
	"gosoft/cms/content/api/internal/types"

	"github.com/zeromicro/go-zero/core/logx"
)

type GetContentLogic struct {
	logx.Logger
	ctx    context.Context
	svcCtx *svc.ServiceContext
}

func NewGetContentLogic(ctx context.Context, svcCtx *svc.ServiceContext) *GetContentLogic {
	return &GetContentLogic{
		Logger: logx.WithContext(ctx),
		ctx:    ctx,
		svcCtx: svcCtx,
	}
}

func (l *GetContentLogic) GetContent(req *types.ContentReq) (resp *types.ContentRes, err error) {
	// todo: add your logic here and delete this line

	return &types.ContentRes{
		Id:    "1001",
		Title: "aaaa",
	}, nil
}
