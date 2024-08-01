// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// PackageGoodsDao is the data access object for table package_goods.
type PackageGoodsDao struct {
	table   string              // table is the underlying table name of the DAO.
	group   string              // group is the database configuration group name of current DAO.
	columns PackageGoodsColumns // columns contains all the column names of Table for convenient usage.
}

// PackageGoodsColumns defines and stores column names for table package_goods.
type PackageGoodsColumns struct {
	PackageId   string //
	GoodsId     string //
	ProductId   string //
	GoodsNumber string //
	AdminId     string //
}

// packageGoodsColumns holds the columns for table package_goods.
var packageGoodsColumns = PackageGoodsColumns{
	PackageId:   "package_id",
	GoodsId:     "goods_id",
	ProductId:   "product_id",
	GoodsNumber: "goods_number",
	AdminId:     "admin_id",
}

// NewPackageGoodsDao creates and returns a new DAO object for table data access.
func NewPackageGoodsDao() *PackageGoodsDao {
	return &PackageGoodsDao{
		group:   "default",
		table:   "package_goods",
		columns: packageGoodsColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *PackageGoodsDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *PackageGoodsDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *PackageGoodsDao) Columns() PackageGoodsColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *PackageGoodsDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *PackageGoodsDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *PackageGoodsDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
