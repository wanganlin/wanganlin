// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// CatRecommendDao is the data access object for table cat_recommend.
type CatRecommendDao struct {
	table   string              // table is the underlying table name of the DAO.
	group   string              // group is the database configuration group name of current DAO.
	columns CatRecommendColumns // columns contains all the column names of Table for convenient usage.
}

// CatRecommendColumns defines and stores column names for table cat_recommend.
type CatRecommendColumns struct {
	CatId         string //
	RecommendType string //
}

// catRecommendColumns holds the columns for table cat_recommend.
var catRecommendColumns = CatRecommendColumns{
	CatId:         "cat_id",
	RecommendType: "recommend_type",
}

// NewCatRecommendDao creates and returns a new DAO object for table data access.
func NewCatRecommendDao() *CatRecommendDao {
	return &CatRecommendDao{
		group:   "default",
		table:   "cat_recommend",
		columns: catRecommendColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *CatRecommendDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *CatRecommendDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *CatRecommendDao) Columns() CatRecommendColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *CatRecommendDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *CatRecommendDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *CatRecommendDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
