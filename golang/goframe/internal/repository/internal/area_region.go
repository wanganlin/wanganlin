// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// AreaRegionDao is the data access object for table area_region.
type AreaRegionDao struct {
	table   string            // table is the underlying table name of the DAO.
	group   string            // group is the database configuration group name of current DAO.
	columns AreaRegionColumns // columns contains all the column names of Table for convenient usage.
}

// AreaRegionColumns defines and stores column names for table area_region.
type AreaRegionColumns struct {
	ShippingAreaId string //
	RegionId       string //
}

// areaRegionColumns holds the columns for table area_region.
var areaRegionColumns = AreaRegionColumns{
	ShippingAreaId: "shipping_area_id",
	RegionId:       "region_id",
}

// NewAreaRegionDao creates and returns a new DAO object for table data access.
func NewAreaRegionDao() *AreaRegionDao {
	return &AreaRegionDao{
		group:   "default",
		table:   "area_region",
		columns: areaRegionColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *AreaRegionDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *AreaRegionDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *AreaRegionDao) Columns() AreaRegionColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *AreaRegionDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *AreaRegionDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *AreaRegionDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
