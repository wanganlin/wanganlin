// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// SnatchLogDao is the data access object for table snatch_log.
type SnatchLogDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns SnatchLogColumns // columns contains all the column names of Table for convenient usage.
}

// SnatchLogColumns defines and stores column names for table snatch_log.
type SnatchLogColumns struct {
	LogId    string //
	SnatchId string //
	UserId   string //
	BidPrice string //
	BidTime  string //
}

// snatchLogColumns holds the columns for table snatch_log.
var snatchLogColumns = SnatchLogColumns{
	LogId:    "log_id",
	SnatchId: "snatch_id",
	UserId:   "user_id",
	BidPrice: "bid_price",
	BidTime:  "bid_time",
}

// NewSnatchLogDao creates and returns a new DAO object for table data access.
func NewSnatchLogDao() *SnatchLogDao {
	return &SnatchLogDao{
		group:   "default",
		table:   "snatch_log",
		columns: snatchLogColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *SnatchLogDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *SnatchLogDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *SnatchLogDao) Columns() SnatchLogColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *SnatchLogDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *SnatchLogDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *SnatchLogDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
