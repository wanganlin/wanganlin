// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// GoodsTypeDao is the data access object for table goods_type.
type GoodsTypeDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns GoodsTypeColumns // columns contains all the column names of Table for convenient usage.
}

// GoodsTypeColumns defines and stores column names for table goods_type.
type GoodsTypeColumns struct {
	CatId     string //
	CatName   string //
	Enabled   string //
	AttrGroup string //
}

// goodsTypeColumns holds the columns for table goods_type.
var goodsTypeColumns = GoodsTypeColumns{
	CatId:     "cat_id",
	CatName:   "cat_name",
	Enabled:   "enabled",
	AttrGroup: "attr_group",
}

// NewGoodsTypeDao creates and returns a new DAO object for table data access.
func NewGoodsTypeDao() *GoodsTypeDao {
	return &GoodsTypeDao{
		group:   "default",
		table:   "goods_type",
		columns: goodsTypeColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *GoodsTypeDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *GoodsTypeDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *GoodsTypeDao) Columns() GoodsTypeColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *GoodsTypeDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *GoodsTypeDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *GoodsTypeDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
