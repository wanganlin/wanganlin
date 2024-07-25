// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package market

import (
	"context"

	"gitee.com/gosoft/gomall/internal/app/market/v1"
)

type IMarketV1 interface {
	Index(ctx context.Context, req *v1.IndexReq) (res *v1.IndexRes, err error)
}
