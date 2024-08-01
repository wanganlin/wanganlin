// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// UserRankDao is the data access object for table user_rank.
type UserRankDao struct {
	table   string          // table is the underlying table name of the DAO.
	group   string          // group is the database configuration group name of current DAO.
	columns UserRankColumns // columns contains all the column names of Table for convenient usage.
}

// UserRankColumns defines and stores column names for table user_rank.
type UserRankColumns struct {
	RankId      string //
	RankName    string //
	MinPoints   string //
	MaxPoints   string //
	Discount    string //
	ShowPrice   string //
	SpecialRank string //
}

// userRankColumns holds the columns for table user_rank.
var userRankColumns = UserRankColumns{
	RankId:      "rank_id",
	RankName:    "rank_name",
	MinPoints:   "min_points",
	MaxPoints:   "max_points",
	Discount:    "discount",
	ShowPrice:   "show_price",
	SpecialRank: "special_rank",
}

// NewUserRankDao creates and returns a new DAO object for table data access.
func NewUserRankDao() *UserRankDao {
	return &UserRankDao{
		group:   "default",
		table:   "user_rank",
		columns: userRankColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *UserRankDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *UserRankDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *UserRankDao) Columns() UserRankColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *UserRankDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *UserRankDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *UserRankDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
