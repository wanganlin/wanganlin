// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// SuppliersDao is the data access object for table suppliers.
type SuppliersDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns SuppliersColumns // columns contains all the column names of Table for convenient usage.
}

// SuppliersColumns defines and stores column names for table suppliers.
type SuppliersColumns struct {
	SuppliersId   string //
	SuppliersName string //
	SuppliersDesc string //
	IsCheck       string //
}

// suppliersColumns holds the columns for table suppliers.
var suppliersColumns = SuppliersColumns{
	SuppliersId:   "suppliers_id",
	SuppliersName: "suppliers_name",
	SuppliersDesc: "suppliers_desc",
	IsCheck:       "is_check",
}

// NewSuppliersDao creates and returns a new DAO object for table data access.
func NewSuppliersDao() *SuppliersDao {
	return &SuppliersDao{
		group:   "default",
		table:   "suppliers",
		columns: suppliersColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *SuppliersDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *SuppliersDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *SuppliersDao) Columns() SuppliersColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *SuppliersDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *SuppliersDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *SuppliersDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
