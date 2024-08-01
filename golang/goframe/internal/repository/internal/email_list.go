// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// EmailListDao is the data access object for table email_list.
type EmailListDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns EmailListColumns // columns contains all the column names of Table for convenient usage.
}

// EmailListColumns defines and stores column names for table email_list.
type EmailListColumns struct {
	Id    string //
	Email string //
	Stat  string //
	Hash  string //
}

// emailListColumns holds the columns for table email_list.
var emailListColumns = EmailListColumns{
	Id:    "id",
	Email: "email",
	Stat:  "stat",
	Hash:  "hash",
}

// NewEmailListDao creates and returns a new DAO object for table data access.
func NewEmailListDao() *EmailListDao {
	return &EmailListDao{
		group:   "default",
		table:   "email_list",
		columns: emailListColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *EmailListDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *EmailListDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *EmailListDao) Columns() EmailListColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *EmailListDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *EmailListDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *EmailListDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
