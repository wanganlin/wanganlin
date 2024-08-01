// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// ShippingDao is the data access object for table shipping.
type ShippingDao struct {
	table   string          // table is the underlying table name of the DAO.
	group   string          // group is the database configuration group name of current DAO.
	columns ShippingColumns // columns contains all the column names of Table for convenient usage.
}

// ShippingColumns defines and stores column names for table shipping.
type ShippingColumns struct {
	ShippingId    string //
	ShippingCode  string //
	ShippingName  string //
	ShippingDesc  string //
	Insure        string //
	SupportCod    string //
	Enabled       string //
	ShippingPrint string //
	PrintBg       string //
	ConfigLable   string //
	PrintModel    string //
	ShippingOrder string //
}

// shippingColumns holds the columns for table shipping.
var shippingColumns = ShippingColumns{
	ShippingId:    "shipping_id",
	ShippingCode:  "shipping_code",
	ShippingName:  "shipping_name",
	ShippingDesc:  "shipping_desc",
	Insure:        "insure",
	SupportCod:    "support_cod",
	Enabled:       "enabled",
	ShippingPrint: "shipping_print",
	PrintBg:       "print_bg",
	ConfigLable:   "config_lable",
	PrintModel:    "print_model",
	ShippingOrder: "shipping_order",
}

// NewShippingDao creates and returns a new DAO object for table data access.
func NewShippingDao() *ShippingDao {
	return &ShippingDao{
		group:   "default",
		table:   "shipping",
		columns: shippingColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *ShippingDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *ShippingDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *ShippingDao) Columns() ShippingColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *ShippingDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *ShippingDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *ShippingDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
