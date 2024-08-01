// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// OrderActionDao is the data access object for table order_action.
type OrderActionDao struct {
	table   string             // table is the underlying table name of the DAO.
	group   string             // group is the database configuration group name of current DAO.
	columns OrderActionColumns // columns contains all the column names of Table for convenient usage.
}

// OrderActionColumns defines and stores column names for table order_action.
type OrderActionColumns struct {
	ActionId       string //
	OrderId        string //
	ActionUser     string //
	OrderStatus    string //
	ShippingStatus string //
	PayStatus      string //
	ActionPlace    string //
	ActionNote     string //
	LogTime        string //
}

// orderActionColumns holds the columns for table order_action.
var orderActionColumns = OrderActionColumns{
	ActionId:       "action_id",
	OrderId:        "order_id",
	ActionUser:     "action_user",
	OrderStatus:    "order_status",
	ShippingStatus: "shipping_status",
	PayStatus:      "pay_status",
	ActionPlace:    "action_place",
	ActionNote:     "action_note",
	LogTime:        "log_time",
}

// NewOrderActionDao creates and returns a new DAO object for table data access.
func NewOrderActionDao() *OrderActionDao {
	return &OrderActionDao{
		group:   "default",
		table:   "order_action",
		columns: orderActionColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *OrderActionDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *OrderActionDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *OrderActionDao) Columns() OrderActionColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *OrderActionDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *OrderActionDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *OrderActionDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
