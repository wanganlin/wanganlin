// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// NavDao is the data access object for table nav.
type NavDao struct {
	table   string     // table is the underlying table name of the DAO.
	group   string     // group is the database configuration group name of current DAO.
	columns NavColumns // columns contains all the column names of Table for convenient usage.
}

// NavColumns defines and stores column names for table nav.
type NavColumns struct {
	Id        string //
	Ctype     string //
	Cid       string //
	Name      string //
	Ifshow    string //
	Vieworder string //
	Opennew   string //
	Url       string //
	Type      string //
}

// navColumns holds the columns for table nav.
var navColumns = NavColumns{
	Id:        "id",
	Ctype:     "ctype",
	Cid:       "cid",
	Name:      "name",
	Ifshow:    "ifshow",
	Vieworder: "vieworder",
	Opennew:   "opennew",
	Url:       "url",
	Type:      "type",
}

// NewNavDao creates and returns a new DAO object for table data access.
func NewNavDao() *NavDao {
	return &NavDao{
		group:   "default",
		table:   "nav",
		columns: navColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *NavDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *NavDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *NavDao) Columns() NavColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *NavDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *NavDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *NavDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
