// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// AdCustomDao is the data access object for table ad_custom.
type AdCustomDao struct {
	table   string          // table is the underlying table name of the DAO.
	group   string          // group is the database configuration group name of current DAO.
	columns AdCustomColumns // columns contains all the column names of Table for convenient usage.
}

// AdCustomColumns defines and stores column names for table ad_custom.
type AdCustomColumns struct {
	AdId     string //
	AdType   string //
	AdName   string //
	AddTime  string //
	Content  string //
	Url      string //
	AdStatus string //
}

// adCustomColumns holds the columns for table ad_custom.
var adCustomColumns = AdCustomColumns{
	AdId:     "ad_id",
	AdType:   "ad_type",
	AdName:   "ad_name",
	AddTime:  "add_time",
	Content:  "content",
	Url:      "url",
	AdStatus: "ad_status",
}

// NewAdCustomDao creates and returns a new DAO object for table data access.
func NewAdCustomDao() *AdCustomDao {
	return &AdCustomDao{
		group:   "default",
		table:   "ad_custom",
		columns: adCustomColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *AdCustomDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *AdCustomDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *AdCustomDao) Columns() AdCustomColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *AdCustomDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *AdCustomDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *AdCustomDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
