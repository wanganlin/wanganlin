// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// GroupGoodsDao is the data access object for table group_goods.
type GroupGoodsDao struct {
	table   string            // table is the underlying table name of the DAO.
	group   string            // group is the database configuration group name of current DAO.
	columns GroupGoodsColumns // columns contains all the column names of Table for convenient usage.
}

// GroupGoodsColumns defines and stores column names for table group_goods.
type GroupGoodsColumns struct {
	ParentId   string //
	GoodsId    string //
	GoodsPrice string //
	AdminId    string //
}

// groupGoodsColumns holds the columns for table group_goods.
var groupGoodsColumns = GroupGoodsColumns{
	ParentId:   "parent_id",
	GoodsId:    "goods_id",
	GoodsPrice: "goods_price",
	AdminId:    "admin_id",
}

// NewGroupGoodsDao creates and returns a new DAO object for table data access.
func NewGroupGoodsDao() *GroupGoodsDao {
	return &GroupGoodsDao{
		group:   "default",
		table:   "group_goods",
		columns: groupGoodsColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *GroupGoodsDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *GroupGoodsDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *GroupGoodsDao) Columns() GroupGoodsColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *GroupGoodsDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *GroupGoodsDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *GroupGoodsDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
