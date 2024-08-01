// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// AccountLogDao is the data access object for table account_log.
type AccountLogDao struct {
	table   string            // table is the underlying table name of the DAO.
	group   string            // group is the database configuration group name of current DAO.
	columns AccountLogColumns // columns contains all the column names of Table for convenient usage.
}

// AccountLogColumns defines and stores column names for table account_log.
type AccountLogColumns struct {
	LogId       string //
	UserId      string //
	UserMoney   string //
	FrozenMoney string //
	RankPoints  string //
	PayPoints   string //
	ChangeTime  string //
	ChangeDesc  string //
	ChangeType  string //
}

// accountLogColumns holds the columns for table account_log.
var accountLogColumns = AccountLogColumns{
	LogId:       "log_id",
	UserId:      "user_id",
	UserMoney:   "user_money",
	FrozenMoney: "frozen_money",
	RankPoints:  "rank_points",
	PayPoints:   "pay_points",
	ChangeTime:  "change_time",
	ChangeDesc:  "change_desc",
	ChangeType:  "change_type",
}

// NewAccountLogDao creates and returns a new DAO object for table data access.
func NewAccountLogDao() *AccountLogDao {
	return &AccountLogDao{
		group:   "default",
		table:   "account_log",
		columns: accountLogColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *AccountLogDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *AccountLogDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *AccountLogDao) Columns() AccountLogColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *AccountLogDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *AccountLogDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *AccountLogDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
