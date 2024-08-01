// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// RegFieldsDao is the data access object for table reg_fields.
type RegFieldsDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns RegFieldsColumns // columns contains all the column names of Table for convenient usage.
}

// RegFieldsColumns defines and stores column names for table reg_fields.
type RegFieldsColumns struct {
	Id           string //
	RegFieldName string //
	DisOrder     string //
	Display      string //
	Type         string //
	IsNeed       string //
}

// regFieldsColumns holds the columns for table reg_fields.
var regFieldsColumns = RegFieldsColumns{
	Id:           "id",
	RegFieldName: "reg_field_name",
	DisOrder:     "dis_order",
	Display:      "display",
	Type:         "type",
	IsNeed:       "is_need",
}

// NewRegFieldsDao creates and returns a new DAO object for table data access.
func NewRegFieldsDao() *RegFieldsDao {
	return &RegFieldsDao{
		group:   "default",
		table:   "reg_fields",
		columns: regFieldsColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *RegFieldsDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *RegFieldsDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *RegFieldsDao) Columns() RegFieldsColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *RegFieldsDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *RegFieldsDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *RegFieldsDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
