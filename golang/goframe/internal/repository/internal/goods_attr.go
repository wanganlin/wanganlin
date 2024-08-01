// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// GoodsAttrDao is the data access object for table goods_attr.
type GoodsAttrDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns GoodsAttrColumns // columns contains all the column names of Table for convenient usage.
}

// GoodsAttrColumns defines and stores column names for table goods_attr.
type GoodsAttrColumns struct {
	GoodsAttrId string //
	GoodsId     string //
	AttrId      string //
	AttrValue   string //
	AttrPrice   string //
}

// goodsAttrColumns holds the columns for table goods_attr.
var goodsAttrColumns = GoodsAttrColumns{
	GoodsAttrId: "goods_attr_id",
	GoodsId:     "goods_id",
	AttrId:      "attr_id",
	AttrValue:   "attr_value",
	AttrPrice:   "attr_price",
}

// NewGoodsAttrDao creates and returns a new DAO object for table data access.
func NewGoodsAttrDao() *GoodsAttrDao {
	return &GoodsAttrDao{
		group:   "default",
		table:   "goods_attr",
		columns: goodsAttrColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *GoodsAttrDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *GoodsAttrDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *GoodsAttrDao) Columns() GoodsAttrColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *GoodsAttrDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *GoodsAttrDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *GoodsAttrDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
