// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// AuctionLogDao is the data access object for table auction_log.
type AuctionLogDao struct {
	table   string            // table is the underlying table name of the DAO.
	group   string            // group is the database configuration group name of current DAO.
	columns AuctionLogColumns // columns contains all the column names of Table for convenient usage.
}

// AuctionLogColumns defines and stores column names for table auction_log.
type AuctionLogColumns struct {
	LogId    string //
	ActId    string //
	BidUser  string //
	BidPrice string //
	BidTime  string //
}

// auctionLogColumns holds the columns for table auction_log.
var auctionLogColumns = AuctionLogColumns{
	LogId:    "log_id",
	ActId:    "act_id",
	BidUser:  "bid_user",
	BidPrice: "bid_price",
	BidTime:  "bid_time",
}

// NewAuctionLogDao creates and returns a new DAO object for table data access.
func NewAuctionLogDao() *AuctionLogDao {
	return &AuctionLogDao{
		group:   "default",
		table:   "auction_log",
		columns: auctionLogColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *AuctionLogDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *AuctionLogDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *AuctionLogDao) Columns() AuctionLogColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *AuctionLogDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *AuctionLogDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *AuctionLogDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
