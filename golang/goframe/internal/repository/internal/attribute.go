// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// AttributeDao is the data access object for table attribute.
type AttributeDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns AttributeColumns // columns contains all the column names of Table for convenient usage.
}

// AttributeColumns defines and stores column names for table attribute.
type AttributeColumns struct {
	AttrId        string //
	CatId         string //
	AttrName      string //
	AttrInputType string //
	AttrType      string //
	AttrValues    string //
	AttrIndex     string //
	SortOrder     string //
	IsLinked      string //
	AttrGroup     string //
}

// attributeColumns holds the columns for table attribute.
var attributeColumns = AttributeColumns{
	AttrId:        "attr_id",
	CatId:         "cat_id",
	AttrName:      "attr_name",
	AttrInputType: "attr_input_type",
	AttrType:      "attr_type",
	AttrValues:    "attr_values",
	AttrIndex:     "attr_index",
	SortOrder:     "sort_order",
	IsLinked:      "is_linked",
	AttrGroup:     "attr_group",
}

// NewAttributeDao creates and returns a new DAO object for table data access.
func NewAttributeDao() *AttributeDao {
	return &AttributeDao{
		group:   "default",
		table:   "attribute",
		columns: attributeColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *AttributeDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *AttributeDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *AttributeDao) Columns() AttributeColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *AttributeDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *AttributeDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *AttributeDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
