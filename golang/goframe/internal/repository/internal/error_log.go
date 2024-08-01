// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// ErrorLogDao is the data access object for table error_log.
type ErrorLogDao struct {
	table   string          // table is the underlying table name of the DAO.
	group   string          // group is the database configuration group name of current DAO.
	columns ErrorLogColumns // columns contains all the column names of Table for convenient usage.
}

// ErrorLogColumns defines and stores column names for table error_log.
type ErrorLogColumns struct {
	Id   string //
	Info string //
	File string //
	Time string //
}

// errorLogColumns holds the columns for table error_log.
var errorLogColumns = ErrorLogColumns{
	Id:   "id",
	Info: "info",
	File: "file",
	Time: "time",
}

// NewErrorLogDao creates and returns a new DAO object for table data access.
func NewErrorLogDao() *ErrorLogDao {
	return &ErrorLogDao{
		group:   "default",
		table:   "error_log",
		columns: errorLogColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *ErrorLogDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *ErrorLogDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *ErrorLogDao) Columns() ErrorLogColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *ErrorLogDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *ErrorLogDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *ErrorLogDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
