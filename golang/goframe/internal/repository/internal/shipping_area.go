// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// ShippingAreaDao is the data access object for table shipping_area.
type ShippingAreaDao struct {
	table   string              // table is the underlying table name of the DAO.
	group   string              // group is the database configuration group name of current DAO.
	columns ShippingAreaColumns // columns contains all the column names of Table for convenient usage.
}

// ShippingAreaColumns defines and stores column names for table shipping_area.
type ShippingAreaColumns struct {
	ShippingAreaId   string //
	ShippingAreaName string //
	ShippingId       string //
	Configure        string //
}

// shippingAreaColumns holds the columns for table shipping_area.
var shippingAreaColumns = ShippingAreaColumns{
	ShippingAreaId:   "shipping_area_id",
	ShippingAreaName: "shipping_area_name",
	ShippingId:       "shipping_id",
	Configure:        "configure",
}

// NewShippingAreaDao creates and returns a new DAO object for table data access.
func NewShippingAreaDao() *ShippingAreaDao {
	return &ShippingAreaDao{
		group:   "default",
		table:   "shipping_area",
		columns: shippingAreaColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *ShippingAreaDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *ShippingAreaDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *ShippingAreaDao) Columns() ShippingAreaColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *ShippingAreaDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *ShippingAreaDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *ShippingAreaDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
