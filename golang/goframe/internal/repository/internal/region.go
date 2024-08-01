// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// RegionDao is the data access object for table region.
type RegionDao struct {
	table   string        // table is the underlying table name of the DAO.
	group   string        // group is the database configuration group name of current DAO.
	columns RegionColumns // columns contains all the column names of Table for convenient usage.
}

// RegionColumns defines and stores column names for table region.
type RegionColumns struct {
	RegionId   string //
	ParentId   string //
	RegionName string //
	RegionType string //
	AgencyId   string //
}

// regionColumns holds the columns for table region.
var regionColumns = RegionColumns{
	RegionId:   "region_id",
	ParentId:   "parent_id",
	RegionName: "region_name",
	RegionType: "region_type",
	AgencyId:   "agency_id",
}

// NewRegionDao creates and returns a new DAO object for table data access.
func NewRegionDao() *RegionDao {
	return &RegionDao{
		group:   "default",
		table:   "region",
		columns: regionColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *RegionDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *RegionDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *RegionDao) Columns() RegionColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *RegionDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *RegionDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *RegionDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
