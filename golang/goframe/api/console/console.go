// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package console

import (
	"context"
	v2 "gomall/api/console/v1"
)

type IConsoleV1 interface {
	Index(ctx context.Context, req *v2.IndexReq) (res *v2.IndexRes, err error)
	UserQuery(ctx context.Context, req *v2.UserQueryReq) (res *v2.UserQueryRes, err error)
}
