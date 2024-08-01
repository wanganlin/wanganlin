// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// ShopConfigDao is the data access object for table shop_config.
type ShopConfigDao struct {
	table   string            // table is the underlying table name of the DAO.
	group   string            // group is the database configuration group name of current DAO.
	columns ShopConfigColumns // columns contains all the column names of Table for convenient usage.
}

// ShopConfigColumns defines and stores column names for table shop_config.
type ShopConfigColumns struct {
	Id         string //
	ParentId   string //
	Code       string //
	Type       string //
	StoreRange string //
	StoreDir   string //
	Value      string //
	SortOrder  string //
}

// shopConfigColumns holds the columns for table shop_config.
var shopConfigColumns = ShopConfigColumns{
	Id:         "id",
	ParentId:   "parent_id",
	Code:       "code",
	Type:       "type",
	StoreRange: "store_range",
	StoreDir:   "store_dir",
	Value:      "value",
	SortOrder:  "sort_order",
}

// NewShopConfigDao creates and returns a new DAO object for table data access.
func NewShopConfigDao() *ShopConfigDao {
	return &ShopConfigDao{
		group:   "default",
		table:   "shop_config",
		columns: shopConfigColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *ShopConfigDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *ShopConfigDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *ShopConfigDao) Columns() ShopConfigColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *ShopConfigDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *ShopConfigDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *ShopConfigDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
