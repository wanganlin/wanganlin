// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// UserFeedDao is the data access object for table user_feed.
type UserFeedDao struct {
	table   string          // table is the underlying table name of the DAO.
	group   string          // group is the database configuration group name of current DAO.
	columns UserFeedColumns // columns contains all the column names of Table for convenient usage.
}

// UserFeedColumns defines and stores column names for table user_feed.
type UserFeedColumns struct {
	FeedId   string //
	UserId   string //
	ValueId  string //
	GoodsId  string //
	FeedType string //
	IsFeed   string //
}

// userFeedColumns holds the columns for table user_feed.
var userFeedColumns = UserFeedColumns{
	FeedId:   "feed_id",
	UserId:   "user_id",
	ValueId:  "value_id",
	GoodsId:  "goods_id",
	FeedType: "feed_type",
	IsFeed:   "is_feed",
}

// NewUserFeedDao creates and returns a new DAO object for table data access.
func NewUserFeedDao() *UserFeedDao {
	return &UserFeedDao{
		group:   "default",
		table:   "user_feed",
		columns: userFeedColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *UserFeedDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *UserFeedDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *UserFeedDao) Columns() UserFeedColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *UserFeedDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *UserFeedDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *UserFeedDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
