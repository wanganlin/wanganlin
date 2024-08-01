// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// AdPositionDao is the data access object for table ad_position.
type AdPositionDao struct {
	table   string            // table is the underlying table name of the DAO.
	group   string            // group is the database configuration group name of current DAO.
	columns AdPositionColumns // columns contains all the column names of Table for convenient usage.
}

// AdPositionColumns defines and stores column names for table ad_position.
type AdPositionColumns struct {
	PositionId    string //
	PositionName  string //
	AdWidth       string //
	AdHeight      string //
	PositionDesc  string //
	PositionStyle string //
}

// adPositionColumns holds the columns for table ad_position.
var adPositionColumns = AdPositionColumns{
	PositionId:    "position_id",
	PositionName:  "position_name",
	AdWidth:       "ad_width",
	AdHeight:      "ad_height",
	PositionDesc:  "position_desc",
	PositionStyle: "position_style",
}

// NewAdPositionDao creates and returns a new DAO object for table data access.
func NewAdPositionDao() *AdPositionDao {
	return &AdPositionDao{
		group:   "default",
		table:   "ad_position",
		columns: adPositionColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *AdPositionDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *AdPositionDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *AdPositionDao) Columns() AdPositionColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *AdPositionDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *AdPositionDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *AdPositionDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
