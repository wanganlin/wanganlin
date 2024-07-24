// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package user

import (
	"context"

	"gitee.com/gosoft/gomall/api/user/v1"
)

type IUserV1 interface {
	Profile(ctx context.Context, req *v1.ProfileReq) (res *v1.ProfileRes, err error)
}
