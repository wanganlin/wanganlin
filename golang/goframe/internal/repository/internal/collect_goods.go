// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// CollectGoodsDao is the data access object for table collect_goods.
type CollectGoodsDao struct {
	table   string              // table is the underlying table name of the DAO.
	group   string              // group is the database configuration group name of current DAO.
	columns CollectGoodsColumns // columns contains all the column names of Table for convenient usage.
}

// CollectGoodsColumns defines and stores column names for table collect_goods.
type CollectGoodsColumns struct {
	RecId       string //
	UserId      string //
	GoodsId     string //
	AddTime     string //
	IsAttention string //
}

// collectGoodsColumns holds the columns for table collect_goods.
var collectGoodsColumns = CollectGoodsColumns{
	RecId:       "rec_id",
	UserId:      "user_id",
	GoodsId:     "goods_id",
	AddTime:     "add_time",
	IsAttention: "is_attention",
}

// NewCollectGoodsDao creates and returns a new DAO object for table data access.
func NewCollectGoodsDao() *CollectGoodsDao {
	return &CollectGoodsDao{
		group:   "default",
		table:   "collect_goods",
		columns: collectGoodsColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *CollectGoodsDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *CollectGoodsDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *CollectGoodsDao) Columns() CollectGoodsColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *CollectGoodsDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *CollectGoodsDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *CollectGoodsDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
