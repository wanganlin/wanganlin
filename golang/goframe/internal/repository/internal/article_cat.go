// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// ArticleCatDao is the data access object for table article_cat.
type ArticleCatDao struct {
	table   string            // table is the underlying table name of the DAO.
	group   string            // group is the database configuration group name of current DAO.
	columns ArticleCatColumns // columns contains all the column names of Table for convenient usage.
}

// ArticleCatColumns defines and stores column names for table article_cat.
type ArticleCatColumns struct {
	CatId     string //
	CatName   string //
	CatType   string //
	Keywords  string //
	CatDesc   string //
	SortOrder string //
	ShowInNav string //
	ParentId  string //
}

// articleCatColumns holds the columns for table article_cat.
var articleCatColumns = ArticleCatColumns{
	CatId:     "cat_id",
	CatName:   "cat_name",
	CatType:   "cat_type",
	Keywords:  "keywords",
	CatDesc:   "cat_desc",
	SortOrder: "sort_order",
	ShowInNav: "show_in_nav",
	ParentId:  "parent_id",
}

// NewArticleCatDao creates and returns a new DAO object for table data access.
func NewArticleCatDao() *ArticleCatDao {
	return &ArticleCatDao{
		group:   "default",
		table:   "article_cat",
		columns: articleCatColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *ArticleCatDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *ArticleCatDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *ArticleCatDao) Columns() ArticleCatColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *ArticleCatDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *ArticleCatDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *ArticleCatDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
