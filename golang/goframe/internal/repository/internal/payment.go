// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// PaymentDao is the data access object for table payment.
type PaymentDao struct {
	table   string         // table is the underlying table name of the DAO.
	group   string         // group is the database configuration group name of current DAO.
	columns PaymentColumns // columns contains all the column names of Table for convenient usage.
}

// PaymentColumns defines and stores column names for table payment.
type PaymentColumns struct {
	PayId     string //
	PayCode   string //
	PayName   string //
	PayFee    string //
	PayDesc   string //
	PayOrder  string //
	PayConfig string //
	Enabled   string //
	IsCod     string //
	IsOnline  string //
}

// paymentColumns holds the columns for table payment.
var paymentColumns = PaymentColumns{
	PayId:     "pay_id",
	PayCode:   "pay_code",
	PayName:   "pay_name",
	PayFee:    "pay_fee",
	PayDesc:   "pay_desc",
	PayOrder:  "pay_order",
	PayConfig: "pay_config",
	Enabled:   "enabled",
	IsCod:     "is_cod",
	IsOnline:  "is_online",
}

// NewPaymentDao creates and returns a new DAO object for table data access.
func NewPaymentDao() *PaymentDao {
	return &PaymentDao{
		group:   "default",
		table:   "payment",
		columns: paymentColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *PaymentDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *PaymentDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *PaymentDao) Columns() PaymentColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *PaymentDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *PaymentDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *PaymentDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
