// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package user

import (
	"context"

	"gomall/internal/api/user/v1"
)

type IUserV1 interface {
	AccountQuery(ctx context.Context, req *v1.AccountQueryReq) (res *v1.AccountQueryRes, err error)
	AddressQuery(ctx context.Context, req *v1.AddressQueryReq) (res *v1.AddressQueryRes, err error)
	AddressCreate(ctx context.Context, req *v1.AddressCreateReq) (res *v1.AddressCreateRes, err error)
	AddressShow(ctx context.Context, req *v1.AddressShowReq) (res *v1.AddressShowRes, err error)
	AddressUpdate(ctx context.Context, req *v1.AddressUpdateReq) (res *v1.AddressUpdateRes, err error)
	AddressDelete(ctx context.Context, req *v1.AddressDeleteReq) (res *v1.AddressDeleteRes, err error)
	CouponQuery(ctx context.Context, req *v1.CouponQueryReq) (res *v1.CouponQueryRes, err error)
	FavoriteQuery(ctx context.Context, req *v1.FavoriteQueryReq) (res *v1.FavoriteQueryRes, err error)
	Index(ctx context.Context, req *v1.IndexReq) (res *v1.IndexRes, err error)
	InviteQuery(ctx context.Context, req *v1.InviteQueryReq) (res *v1.InviteQueryRes, err error)
	OrderQuery(ctx context.Context, req *v1.OrderQueryReq) (res *v1.OrderQueryRes, err error)
	Profile(ctx context.Context, req *v1.ProfileReq) (res *v1.ProfileRes, err error)
}
