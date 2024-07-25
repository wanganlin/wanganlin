// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package seller

import (
	"context"

	"gitee.com/gosoft/gomall/internal/app/seller/v1"
)

type ISellerV1 interface {
	ActivityQuery(ctx context.Context, req *v1.ActivityQueryReq) (res *v1.ActivityQueryRes, err error)
	DeliveryQuery(ctx context.Context, req *v1.DeliveryQueryReq) (res *v1.DeliveryQueryRes, err error)
	FinanceQuery(ctx context.Context, req *v1.FinanceQueryReq) (res *v1.FinanceQueryRes, err error)
	Index(ctx context.Context, req *v1.IndexReq) (res *v1.IndexRes, err error)
	OrderQuery(ctx context.Context, req *v1.OrderQueryReq) (res *v1.OrderQueryRes, err error)
	ProductQuery(ctx context.Context, req *v1.ProductQueryReq) (res *v1.ProductQueryRes, err error)
	Setting(ctx context.Context, req *v1.SettingReq) (res *v1.SettingRes, err error)
	ShopQuery(ctx context.Context, req *v1.ShopQueryReq) (res *v1.ShopQueryRes, err error)
	StoreQuery(ctx context.Context, req *v1.StoreQueryReq) (res *v1.StoreQueryRes, err error)
}
