// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// VolumePriceDao is the data access object for table volume_price.
type VolumePriceDao struct {
	table   string             // table is the underlying table name of the DAO.
	group   string             // group is the database configuration group name of current DAO.
	columns VolumePriceColumns // columns contains all the column names of Table for convenient usage.
}

// VolumePriceColumns defines and stores column names for table volume_price.
type VolumePriceColumns struct {
	PriceType    string //
	GoodsId      string //
	VolumeNumber string //
	VolumePrice  string //
}

// volumePriceColumns holds the columns for table volume_price.
var volumePriceColumns = VolumePriceColumns{
	PriceType:    "price_type",
	GoodsId:      "goods_id",
	VolumeNumber: "volume_number",
	VolumePrice:  "volume_price",
}

// NewVolumePriceDao creates and returns a new DAO object for table data access.
func NewVolumePriceDao() *VolumePriceDao {
	return &VolumePriceDao{
		group:   "default",
		table:   "volume_price",
		columns: volumePriceColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *VolumePriceDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *VolumePriceDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *VolumePriceDao) Columns() VolumePriceColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *VolumePriceDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *VolumePriceDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *VolumePriceDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
