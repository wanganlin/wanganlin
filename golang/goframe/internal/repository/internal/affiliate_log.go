// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// AffiliateLogDao is the data access object for table affiliate_log.
type AffiliateLogDao struct {
	table   string              // table is the underlying table name of the DAO.
	group   string              // group is the database configuration group name of current DAO.
	columns AffiliateLogColumns // columns contains all the column names of Table for convenient usage.
}

// AffiliateLogColumns defines and stores column names for table affiliate_log.
type AffiliateLogColumns struct {
	LogId        string //
	OrderId      string //
	Time         string //
	UserId       string //
	UserName     string //
	Money        string //
	Point        string //
	SeparateType string //
}

// affiliateLogColumns holds the columns for table affiliate_log.
var affiliateLogColumns = AffiliateLogColumns{
	LogId:        "log_id",
	OrderId:      "order_id",
	Time:         "time",
	UserId:       "user_id",
	UserName:     "user_name",
	Money:        "money",
	Point:        "point",
	SeparateType: "separate_type",
}

// NewAffiliateLogDao creates and returns a new DAO object for table data access.
func NewAffiliateLogDao() *AffiliateLogDao {
	return &AffiliateLogDao{
		group:   "default",
		table:   "affiliate_log",
		columns: affiliateLogColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *AffiliateLogDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *AffiliateLogDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *AffiliateLogDao) Columns() AffiliateLogColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *AffiliateLogDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *AffiliateLogDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *AffiliateLogDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
