// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// VoteOptionDao is the data access object for table vote_option.
type VoteOptionDao struct {
	table   string            // table is the underlying table name of the DAO.
	group   string            // group is the database configuration group name of current DAO.
	columns VoteOptionColumns // columns contains all the column names of Table for convenient usage.
}

// VoteOptionColumns defines and stores column names for table vote_option.
type VoteOptionColumns struct {
	OptionId    string //
	VoteId      string //
	OptionName  string //
	OptionCount string //
	OptionOrder string //
}

// voteOptionColumns holds the columns for table vote_option.
var voteOptionColumns = VoteOptionColumns{
	OptionId:    "option_id",
	VoteId:      "vote_id",
	OptionName:  "option_name",
	OptionCount: "option_count",
	OptionOrder: "option_order",
}

// NewVoteOptionDao creates and returns a new DAO object for table data access.
func NewVoteOptionDao() *VoteOptionDao {
	return &VoteOptionDao{
		group:   "default",
		table:   "vote_option",
		columns: voteOptionColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *VoteOptionDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *VoteOptionDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *VoteOptionDao) Columns() VoteOptionColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *VoteOptionDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *VoteOptionDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *VoteOptionDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
