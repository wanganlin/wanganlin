// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// DeliveryGoodsDao is the data access object for table delivery_goods.
type DeliveryGoodsDao struct {
	table   string               // table is the underlying table name of the DAO.
	group   string               // group is the database configuration group name of current DAO.
	columns DeliveryGoodsColumns // columns contains all the column names of Table for convenient usage.
}

// DeliveryGoodsColumns defines and stores column names for table delivery_goods.
type DeliveryGoodsColumns struct {
	RecId         string //
	DeliveryId    string //
	GoodsId       string //
	ProductId     string //
	ProductSn     string //
	GoodsName     string //
	BrandName     string //
	GoodsSn       string //
	IsReal        string //
	ExtensionCode string //
	ParentId      string //
	SendNumber    string //
	GoodsAttr     string //
}

// deliveryGoodsColumns holds the columns for table delivery_goods.
var deliveryGoodsColumns = DeliveryGoodsColumns{
	RecId:         "rec_id",
	DeliveryId:    "delivery_id",
	GoodsId:       "goods_id",
	ProductId:     "product_id",
	ProductSn:     "product_sn",
	GoodsName:     "goods_name",
	BrandName:     "brand_name",
	GoodsSn:       "goods_sn",
	IsReal:        "is_real",
	ExtensionCode: "extension_code",
	ParentId:      "parent_id",
	SendNumber:    "send_number",
	GoodsAttr:     "goods_attr",
}

// NewDeliveryGoodsDao creates and returns a new DAO object for table data access.
func NewDeliveryGoodsDao() *DeliveryGoodsDao {
	return &DeliveryGoodsDao{
		group:   "default",
		table:   "delivery_goods",
		columns: deliveryGoodsColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *DeliveryGoodsDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *DeliveryGoodsDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *DeliveryGoodsDao) Columns() DeliveryGoodsColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *DeliveryGoodsDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *DeliveryGoodsDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *DeliveryGoodsDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
