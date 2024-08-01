// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// UsersDao is the data access object for table users.
type UsersDao struct {
	table   string       // table is the underlying table name of the DAO.
	group   string       // group is the database configuration group name of current DAO.
	columns UsersColumns // columns contains all the column names of Table for convenient usage.
}

// UsersColumns defines and stores column names for table users.
type UsersColumns struct {
	UserId         string //
	Email          string //
	UserName       string //
	Password       string //
	Question       string //
	Answer         string //
	Sex            string //
	Birthday       string //
	UserMoney      string //
	FrozenMoney    string //
	PayPoints      string //
	RankPoints     string //
	AddressId      string //
	RegTime        string //
	LastLogin      string //
	LastTime       string //
	LastIp         string //
	VisitCount     string //
	UserRank       string //
	IsSpecial      string //
	EcSalt         string //
	Salt           string //
	ParentId       string //
	Flag           string //
	Alias          string //
	Msn            string //
	Qq             string //
	OfficePhone    string //
	HomePhone      string //
	MobilePhone    string //
	IsValidated    string //
	CreditLine     string //
	PasswdQuestion string //
	PasswdAnswer   string //
}

// usersColumns holds the columns for table users.
var usersColumns = UsersColumns{
	UserId:         "user_id",
	Email:          "email",
	UserName:       "user_name",
	Password:       "password",
	Question:       "question",
	Answer:         "answer",
	Sex:            "sex",
	Birthday:       "birthday",
	UserMoney:      "user_money",
	FrozenMoney:    "frozen_money",
	PayPoints:      "pay_points",
	RankPoints:     "rank_points",
	AddressId:      "address_id",
	RegTime:        "reg_time",
	LastLogin:      "last_login",
	LastTime:       "last_time",
	LastIp:         "last_ip",
	VisitCount:     "visit_count",
	UserRank:       "user_rank",
	IsSpecial:      "is_special",
	EcSalt:         "ec_salt",
	Salt:           "salt",
	ParentId:       "parent_id",
	Flag:           "flag",
	Alias:          "alias",
	Msn:            "msn",
	Qq:             "qq",
	OfficePhone:    "office_phone",
	HomePhone:      "home_phone",
	MobilePhone:    "mobile_phone",
	IsValidated:    "is_validated",
	CreditLine:     "credit_line",
	PasswdQuestion: "passwd_question",
	PasswdAnswer:   "passwd_answer",
}

// NewUsersDao creates and returns a new DAO object for table data access.
func NewUsersDao() *UsersDao {
	return &UsersDao{
		group:   "default",
		table:   "users",
		columns: usersColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *UsersDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *UsersDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *UsersDao) Columns() UsersColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *UsersDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *UsersDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *UsersDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
