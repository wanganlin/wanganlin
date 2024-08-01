// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// PluginsDao is the data access object for table plugins.
type PluginsDao struct {
	table   string         // table is the underlying table name of the DAO.
	group   string         // group is the database configuration group name of current DAO.
	columns PluginsColumns // columns contains all the column names of Table for convenient usage.
}

// PluginsColumns defines and stores column names for table plugins.
type PluginsColumns struct {
	Code        string //
	Version     string //
	Library     string //
	Assign      string //
	InstallDate string //
}

// pluginsColumns holds the columns for table plugins.
var pluginsColumns = PluginsColumns{
	Code:        "code",
	Version:     "version",
	Library:     "library",
	Assign:      "assign",
	InstallDate: "install_date",
}

// NewPluginsDao creates and returns a new DAO object for table data access.
func NewPluginsDao() *PluginsDao {
	return &PluginsDao{
		group:   "default",
		table:   "plugins",
		columns: pluginsColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *PluginsDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *PluginsDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *PluginsDao) Columns() PluginsColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *PluginsDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *PluginsDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *PluginsDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
