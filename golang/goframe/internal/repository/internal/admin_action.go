// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// AdminActionDao is the data access object for table admin_action.
type AdminActionDao struct {
	table   string             // table is the underlying table name of the DAO.
	group   string             // group is the database configuration group name of current DAO.
	columns AdminActionColumns // columns contains all the column names of Table for convenient usage.
}

// AdminActionColumns defines and stores column names for table admin_action.
type AdminActionColumns struct {
	ActionId   string //
	ParentId   string //
	ActionCode string //
	Relevance  string //
}

// adminActionColumns holds the columns for table admin_action.
var adminActionColumns = AdminActionColumns{
	ActionId:   "action_id",
	ParentId:   "parent_id",
	ActionCode: "action_code",
	Relevance:  "relevance",
}

// NewAdminActionDao creates and returns a new DAO object for table data access.
func NewAdminActionDao() *AdminActionDao {
	return &AdminActionDao{
		group:   "default",
		table:   "admin_action",
		columns: adminActionColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *AdminActionDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *AdminActionDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *AdminActionDao) Columns() AdminActionColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *AdminActionDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *AdminActionDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *AdminActionDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
