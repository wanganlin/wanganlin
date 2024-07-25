// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package console

import (
	"context"

	"gitee.com/gosoft/gomall/internal/api/console/v1"
)

type IConsoleV1 interface {
	Index(ctx context.Context, req *v1.IndexReq) (res *v1.IndexRes, err error)
	UserQuery(ctx context.Context, req *v1.UserQueryReq) (res *v1.UserQueryRes, err error)
}
