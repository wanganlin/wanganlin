// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// BrandDao is the data access object for table brand.
type BrandDao struct {
	table   string       // table is the underlying table name of the DAO.
	group   string       // group is the database configuration group name of current DAO.
	columns BrandColumns // columns contains all the column names of Table for convenient usage.
}

// BrandColumns defines and stores column names for table brand.
type BrandColumns struct {
	BrandId   string //
	BrandName string //
	BrandLogo string //
	BrandDesc string //
	SiteUrl   string //
	SortOrder string //
	IsShow    string //
}

// brandColumns holds the columns for table brand.
var brandColumns = BrandColumns{
	BrandId:   "brand_id",
	BrandName: "brand_name",
	BrandLogo: "brand_logo",
	BrandDesc: "brand_desc",
	SiteUrl:   "site_url",
	SortOrder: "sort_order",
	IsShow:    "is_show",
}

// NewBrandDao creates and returns a new DAO object for table data access.
func NewBrandDao() *BrandDao {
	return &BrandDao{
		group:   "default",
		table:   "brand",
		columns: brandColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *BrandDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *BrandDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *BrandDao) Columns() BrandColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *BrandDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *BrandDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *BrandDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
