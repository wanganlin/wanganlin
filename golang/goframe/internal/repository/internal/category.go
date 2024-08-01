// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// CategoryDao is the data access object for table category.
type CategoryDao struct {
	table   string          // table is the underlying table name of the DAO.
	group   string          // group is the database configuration group name of current DAO.
	columns CategoryColumns // columns contains all the column names of Table for convenient usage.
}

// CategoryColumns defines and stores column names for table category.
type CategoryColumns struct {
	CatId        string //
	CatName      string //
	Keywords     string //
	CatDesc      string //
	ParentId     string //
	SortOrder    string //
	TemplateFile string //
	MeasureUnit  string //
	ShowInNav    string //
	Style        string //
	IsShow       string //
	Grade        string //
	FilterAttr   string //
}

// categoryColumns holds the columns for table category.
var categoryColumns = CategoryColumns{
	CatId:        "cat_id",
	CatName:      "cat_name",
	Keywords:     "keywords",
	CatDesc:      "cat_desc",
	ParentId:     "parent_id",
	SortOrder:    "sort_order",
	TemplateFile: "template_file",
	MeasureUnit:  "measure_unit",
	ShowInNav:    "show_in_nav",
	Style:        "style",
	IsShow:       "is_show",
	Grade:        "grade",
	FilterAttr:   "filter_attr",
}

// NewCategoryDao creates and returns a new DAO object for table data access.
func NewCategoryDao() *CategoryDao {
	return &CategoryDao{
		group:   "default",
		table:   "category",
		columns: categoryColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *CategoryDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *CategoryDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *CategoryDao) Columns() CategoryColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *CategoryDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *CategoryDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *CategoryDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
