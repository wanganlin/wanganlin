// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// AutoManageDao is the data access object for table auto_manage.
type AutoManageDao struct {
	table   string            // table is the underlying table name of the DAO.
	group   string            // group is the database configuration group name of current DAO.
	columns AutoManageColumns // columns contains all the column names of Table for convenient usage.
}

// AutoManageColumns defines and stores column names for table auto_manage.
type AutoManageColumns struct {
	ItemId    string //
	Type      string //
	Starttime string //
	Endtime   string //
}

// autoManageColumns holds the columns for table auto_manage.
var autoManageColumns = AutoManageColumns{
	ItemId:    "item_id",
	Type:      "type",
	Starttime: "starttime",
	Endtime:   "endtime",
}

// NewAutoManageDao creates and returns a new DAO object for table data access.
func NewAutoManageDao() *AutoManageDao {
	return &AutoManageDao{
		group:   "default",
		table:   "auto_manage",
		columns: autoManageColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *AutoManageDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *AutoManageDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *AutoManageDao) Columns() AutoManageColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *AutoManageDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *AutoManageDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *AutoManageDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
