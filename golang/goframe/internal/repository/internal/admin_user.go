// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// AdminUserDao is the data access object for table admin_user.
type AdminUserDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns AdminUserColumns // columns contains all the column names of Table for convenient usage.
}

// AdminUserColumns defines and stores column names for table admin_user.
type AdminUserColumns struct {
	UserId      string //
	UserName    string //
	Email       string //
	Password    string //
	EcSalt      string //
	AddTime     string //
	LastLogin   string //
	LastIp      string //
	ActionList  string //
	NavList     string //
	LangType    string //
	AgencyId    string //
	SuppliersId string //
	Todolist    string //
	RoleId      string //
}

// adminUserColumns holds the columns for table admin_user.
var adminUserColumns = AdminUserColumns{
	UserId:      "user_id",
	UserName:    "user_name",
	Email:       "email",
	Password:    "password",
	EcSalt:      "ec_salt",
	AddTime:     "add_time",
	LastLogin:   "last_login",
	LastIp:      "last_ip",
	ActionList:  "action_list",
	NavList:     "nav_list",
	LangType:    "lang_type",
	AgencyId:    "agency_id",
	SuppliersId: "suppliers_id",
	Todolist:    "todolist",
	RoleId:      "role_id",
}

// NewAdminUserDao creates and returns a new DAO object for table data access.
func NewAdminUserDao() *AdminUserDao {
	return &AdminUserDao{
		group:   "default",
		table:   "admin_user",
		columns: adminUserColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *AdminUserDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *AdminUserDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *AdminUserDao) Columns() AdminUserColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *AdminUserDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *AdminUserDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *AdminUserDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
