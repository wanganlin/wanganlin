// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// FeedbackDao is the data access object for table feedback.
type FeedbackDao struct {
	table   string          // table is the underlying table name of the DAO.
	group   string          // group is the database configuration group name of current DAO.
	columns FeedbackColumns // columns contains all the column names of Table for convenient usage.
}

// FeedbackColumns defines and stores column names for table feedback.
type FeedbackColumns struct {
	MsgId      string //
	ParentId   string //
	UserId     string //
	UserName   string //
	UserEmail  string //
	MsgTitle   string //
	MsgType    string //
	MsgStatus  string //
	MsgContent string //
	MsgTime    string //
	MessageImg string //
	OrderId    string //
	MsgArea    string //
}

// feedbackColumns holds the columns for table feedback.
var feedbackColumns = FeedbackColumns{
	MsgId:      "msg_id",
	ParentId:   "parent_id",
	UserId:     "user_id",
	UserName:   "user_name",
	UserEmail:  "user_email",
	MsgTitle:   "msg_title",
	MsgType:    "msg_type",
	MsgStatus:  "msg_status",
	MsgContent: "msg_content",
	MsgTime:    "msg_time",
	MessageImg: "message_img",
	OrderId:    "order_id",
	MsgArea:    "msg_area",
}

// NewFeedbackDao creates and returns a new DAO object for table data access.
func NewFeedbackDao() *FeedbackDao {
	return &FeedbackDao{
		group:   "default",
		table:   "feedback",
		columns: feedbackColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *FeedbackDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *FeedbackDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *FeedbackDao) Columns() FeedbackColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *FeedbackDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *FeedbackDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *FeedbackDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
