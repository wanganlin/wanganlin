// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// UserAccountDao is the data access object for table user_account.
type UserAccountDao struct {
	table   string             // table is the underlying table name of the DAO.
	group   string             // group is the database configuration group name of current DAO.
	columns UserAccountColumns // columns contains all the column names of Table for convenient usage.
}

// UserAccountColumns defines and stores column names for table user_account.
type UserAccountColumns struct {
	Id          string //
	UserId      string //
	AdminUser   string //
	Amount      string //
	AddTime     string //
	PaidTime    string //
	AdminNote   string //
	UserNote    string //
	ProcessType string //
	Payment     string //
	IsPaid      string //
}

// userAccountColumns holds the columns for table user_account.
var userAccountColumns = UserAccountColumns{
	Id:          "id",
	UserId:      "user_id",
	AdminUser:   "admin_user",
	Amount:      "amount",
	AddTime:     "add_time",
	PaidTime:    "paid_time",
	AdminNote:   "admin_note",
	UserNote:    "user_note",
	ProcessType: "process_type",
	Payment:     "payment",
	IsPaid:      "is_paid",
}

// NewUserAccountDao creates and returns a new DAO object for table data access.
func NewUserAccountDao() *UserAccountDao {
	return &UserAccountDao{
		group:   "default",
		table:   "user_account",
		columns: userAccountColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *UserAccountDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *UserAccountDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *UserAccountDao) Columns() UserAccountColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *UserAccountDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *UserAccountDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *UserAccountDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
