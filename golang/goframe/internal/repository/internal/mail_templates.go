// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// MailTemplatesDao is the data access object for table mail_templates.
type MailTemplatesDao struct {
	table   string               // table is the underlying table name of the DAO.
	group   string               // group is the database configuration group name of current DAO.
	columns MailTemplatesColumns // columns contains all the column names of Table for convenient usage.
}

// MailTemplatesColumns defines and stores column names for table mail_templates.
type MailTemplatesColumns struct {
	TemplateId      string //
	TemplateCode    string //
	IsHtml          string //
	TemplateSubject string //
	TemplateContent string //
	LastModify      string //
	LastSend        string //
	Type            string //
}

// mailTemplatesColumns holds the columns for table mail_templates.
var mailTemplatesColumns = MailTemplatesColumns{
	TemplateId:      "template_id",
	TemplateCode:    "template_code",
	IsHtml:          "is_html",
	TemplateSubject: "template_subject",
	TemplateContent: "template_content",
	LastModify:      "last_modify",
	LastSend:        "last_send",
	Type:            "type",
}

// NewMailTemplatesDao creates and returns a new DAO object for table data access.
func NewMailTemplatesDao() *MailTemplatesDao {
	return &MailTemplatesDao{
		group:   "default",
		table:   "mail_templates",
		columns: mailTemplatesColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *MailTemplatesDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *MailTemplatesDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *MailTemplatesDao) Columns() MailTemplatesColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *MailTemplatesDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *MailTemplatesDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *MailTemplatesDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
