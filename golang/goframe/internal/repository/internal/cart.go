// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// CartDao is the data access object for table cart.
type CartDao struct {
	table   string      // table is the underlying table name of the DAO.
	group   string      // group is the database configuration group name of current DAO.
	columns CartColumns // columns contains all the column names of Table for convenient usage.
}

// CartColumns defines and stores column names for table cart.
type CartColumns struct {
	RecId         string //
	UserId        string //
	SessionId     string //
	GoodsId       string //
	GoodsSn       string //
	ProductId     string //
	GoodsName     string //
	MarketPrice   string //
	GoodsPrice    string //
	GoodsNumber   string //
	GoodsAttr     string //
	IsReal        string //
	ExtensionCode string //
	ParentId      string //
	RecType       string //
	IsGift        string //
	IsShipping    string //
	CanHandsel    string //
	GoodsAttrId   string //
}

// cartColumns holds the columns for table cart.
var cartColumns = CartColumns{
	RecId:         "rec_id",
	UserId:        "user_id",
	SessionId:     "session_id",
	GoodsId:       "goods_id",
	GoodsSn:       "goods_sn",
	ProductId:     "product_id",
	GoodsName:     "goods_name",
	MarketPrice:   "market_price",
	GoodsPrice:    "goods_price",
	GoodsNumber:   "goods_number",
	GoodsAttr:     "goods_attr",
	IsReal:        "is_real",
	ExtensionCode: "extension_code",
	ParentId:      "parent_id",
	RecType:       "rec_type",
	IsGift:        "is_gift",
	IsShipping:    "is_shipping",
	CanHandsel:    "can_handsel",
	GoodsAttrId:   "goods_attr_id",
}

// NewCartDao creates and returns a new DAO object for table data access.
func NewCartDao() *CartDao {
	return &CartDao{
		group:   "default",
		table:   "cart",
		columns: cartColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *CartDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *CartDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *CartDao) Columns() CartColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *CartDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *CartDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *CartDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
