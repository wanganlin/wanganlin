// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package store

import (
	"context"

	"gitee.com/gosoft/gomall/internal/api/store/v1"
)

type IStoreV1 interface {
	Index(ctx context.Context, req *v1.IndexReq) (res *v1.IndexRes, err error)
}
