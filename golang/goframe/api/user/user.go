// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package user

import (
	"context"
	v2 "gomall/api/user/v1"
)

type IUserV1 interface {
	AccountQuery(ctx context.Context, req *v2.AccountQueryReq) (res *v2.AccountQueryRes, err error)
	AddressQuery(ctx context.Context, req *v2.AddressQueryReq) (res *v2.AddressQueryRes, err error)
	AddressCreate(ctx context.Context, req *v2.AddressCreateReq) (res *v2.AddressCreateRes, err error)
	AddressShow(ctx context.Context, req *v2.AddressShowReq) (res *v2.AddressShowRes, err error)
	AddressUpdate(ctx context.Context, req *v2.AddressUpdateReq) (res *v2.AddressUpdateRes, err error)
	AddressDelete(ctx context.Context, req *v2.AddressDeleteReq) (res *v2.AddressDeleteRes, err error)
	CouponQuery(ctx context.Context, req *v2.CouponQueryReq) (res *v2.CouponQueryRes, err error)
	FavoriteQuery(ctx context.Context, req *v2.FavoriteQueryReq) (res *v2.FavoriteQueryRes, err error)
	Index(ctx context.Context, req *v2.IndexReq) (res *v2.IndexRes, err error)
	InviteQuery(ctx context.Context, req *v2.InviteQueryReq) (res *v2.InviteQueryRes, err error)
	OrderQuery(ctx context.Context, req *v2.OrderQueryReq) (res *v2.OrderQueryRes, err error)
	Profile(ctx context.Context, req *v2.ProfileReq) (res *v2.ProfileRes, err error)
}
