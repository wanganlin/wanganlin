// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// EmailSendlistDao is the data access object for table email_sendlist.
type EmailSendlistDao struct {
	table   string               // table is the underlying table name of the DAO.
	group   string               // group is the database configuration group name of current DAO.
	columns EmailSendlistColumns // columns contains all the column names of Table for convenient usage.
}

// EmailSendlistColumns defines and stores column names for table email_sendlist.
type EmailSendlistColumns struct {
	Id           string //
	Email        string //
	TemplateId   string //
	EmailContent string //
	Error        string //
	Pri          string //
	LastSend     string //
}

// emailSendlistColumns holds the columns for table email_sendlist.
var emailSendlistColumns = EmailSendlistColumns{
	Id:           "id",
	Email:        "email",
	TemplateId:   "template_id",
	EmailContent: "email_content",
	Error:        "error",
	Pri:          "pri",
	LastSend:     "last_send",
}

// NewEmailSendlistDao creates and returns a new DAO object for table data access.
func NewEmailSendlistDao() *EmailSendlistDao {
	return &EmailSendlistDao{
		group:   "default",
		table:   "email_sendlist",
		columns: emailSendlistColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *EmailSendlistDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *EmailSendlistDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *EmailSendlistDao) Columns() EmailSendlistColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *EmailSendlistDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *EmailSendlistDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *EmailSendlistDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
