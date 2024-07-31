// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package portal

import (
	"context"

	"gitee.com/gosoft/gomall/app/portal/v1"
)

type IPortalV1 interface {
	Index(ctx context.Context, req *v1.IndexReq) (res *v1.IndexRes, err error)
}
