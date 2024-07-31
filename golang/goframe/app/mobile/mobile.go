// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package mobile

import (
	"context"

	"gitee.com/gosoft/gomall/app/mobile/v1"
)

type IMobileV1 interface {
	Index(ctx context.Context, req *v1.IndexReq) (res *v1.IndexRes, err error)
}
