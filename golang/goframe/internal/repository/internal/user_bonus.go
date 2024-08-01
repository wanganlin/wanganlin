// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// UserBonusDao is the data access object for table user_bonus.
type UserBonusDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns UserBonusColumns // columns contains all the column names of Table for convenient usage.
}

// UserBonusColumns defines and stores column names for table user_bonus.
type UserBonusColumns struct {
	BonusId     string //
	BonusTypeId string //
	BonusSn     string //
	UserId      string //
	UsedTime    string //
	OrderId     string //
	Emailed     string //
}

// userBonusColumns holds the columns for table user_bonus.
var userBonusColumns = UserBonusColumns{
	BonusId:     "bonus_id",
	BonusTypeId: "bonus_type_id",
	BonusSn:     "bonus_sn",
	UserId:      "user_id",
	UsedTime:    "used_time",
	OrderId:     "order_id",
	Emailed:     "emailed",
}

// NewUserBonusDao creates and returns a new DAO object for table data access.
func NewUserBonusDao() *UserBonusDao {
	return &UserBonusDao{
		group:   "default",
		table:   "user_bonus",
		columns: userBonusColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *UserBonusDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *UserBonusDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *UserBonusDao) Columns() UserBonusColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *UserBonusDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *UserBonusDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *UserBonusDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
