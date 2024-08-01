// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// OrderGoodsDao is the data access object for table order_goods.
type OrderGoodsDao struct {
	table   string            // table is the underlying table name of the DAO.
	group   string            // group is the database configuration group name of current DAO.
	columns OrderGoodsColumns // columns contains all the column names of Table for convenient usage.
}

// OrderGoodsColumns defines and stores column names for table order_goods.
type OrderGoodsColumns struct {
	RecId         string //
	OrderId       string //
	GoodsId       string //
	GoodsName     string //
	GoodsSn       string //
	ProductId     string //
	GoodsNumber   string //
	MarketPrice   string //
	GoodsPrice    string //
	GoodsAttr     string //
	SendNumber    string //
	IsReal        string //
	ExtensionCode string //
	ParentId      string //
	IsGift        string //
	GoodsAttrId   string //
}

// orderGoodsColumns holds the columns for table order_goods.
var orderGoodsColumns = OrderGoodsColumns{
	RecId:         "rec_id",
	OrderId:       "order_id",
	GoodsId:       "goods_id",
	GoodsName:     "goods_name",
	GoodsSn:       "goods_sn",
	ProductId:     "product_id",
	GoodsNumber:   "goods_number",
	MarketPrice:   "market_price",
	GoodsPrice:    "goods_price",
	GoodsAttr:     "goods_attr",
	SendNumber:    "send_number",
	IsReal:        "is_real",
	ExtensionCode: "extension_code",
	ParentId:      "parent_id",
	IsGift:        "is_gift",
	GoodsAttrId:   "goods_attr_id",
}

// NewOrderGoodsDao creates and returns a new DAO object for table data access.
func NewOrderGoodsDao() *OrderGoodsDao {
	return &OrderGoodsDao{
		group:   "default",
		table:   "order_goods",
		columns: orderGoodsColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *OrderGoodsDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *OrderGoodsDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *OrderGoodsDao) Columns() OrderGoodsColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *OrderGoodsDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *OrderGoodsDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *OrderGoodsDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
