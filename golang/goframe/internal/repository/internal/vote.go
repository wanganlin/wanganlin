// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// VoteDao is the data access object for table vote.
type VoteDao struct {
	table   string      // table is the underlying table name of the DAO.
	group   string      // group is the database configuration group name of current DAO.
	columns VoteColumns // columns contains all the column names of Table for convenient usage.
}

// VoteColumns defines and stores column names for table vote.
type VoteColumns struct {
	VoteId    string //
	VoteName  string //
	StartTime string //
	EndTime   string //
	CanMulti  string //
	VoteCount string //
}

// voteColumns holds the columns for table vote.
var voteColumns = VoteColumns{
	VoteId:    "vote_id",
	VoteName:  "vote_name",
	StartTime: "start_time",
	EndTime:   "end_time",
	CanMulti:  "can_multi",
	VoteCount: "vote_count",
}

// NewVoteDao creates and returns a new DAO object for table data access.
func NewVoteDao() *VoteDao {
	return &VoteDao{
		group:   "default",
		table:   "vote",
		columns: voteColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *VoteDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *VoteDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *VoteDao) Columns() VoteColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *VoteDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *VoteDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *VoteDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
