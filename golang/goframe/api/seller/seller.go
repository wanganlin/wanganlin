// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package seller

import (
	"context"
	v2 "gomall/api/seller/v1"
)

type ISellerV1 interface {
	ActivityQuery(ctx context.Context, req *v2.ActivityQueryReq) (res *v2.ActivityQueryRes, err error)
	DeliveryQuery(ctx context.Context, req *v2.DeliveryQueryReq) (res *v2.DeliveryQueryRes, err error)
	FinanceQuery(ctx context.Context, req *v2.FinanceQueryReq) (res *v2.FinanceQueryRes, err error)
	Index(ctx context.Context, req *v2.IndexReq) (res *v2.IndexRes, err error)
	OrderQuery(ctx context.Context, req *v2.OrderQueryReq) (res *v2.OrderQueryRes, err error)
	ProductQuery(ctx context.Context, req *v2.ProductQueryReq) (res *v2.ProductQueryRes, err error)
	Setting(ctx context.Context, req *v2.SettingReq) (res *v2.SettingRes, err error)
	ShopQuery(ctx context.Context, req *v2.ShopQueryReq) (res *v2.ShopQueryRes, err error)
	StoreQuery(ctx context.Context, req *v2.StoreQueryReq) (res *v2.StoreQueryRes, err error)
}
