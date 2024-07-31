// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package supplier

import (
	"context"

	"gitee.com/gosoft/gomall/app/supplier/v1"
)

type ISupplierV1 interface {
	Index(ctx context.Context, req *v1.IndexReq) (res *v1.IndexRes, err error)
}
