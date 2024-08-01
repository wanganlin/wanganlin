// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// ExchangeGoodsDao is the data access object for table exchange_goods.
type ExchangeGoodsDao struct {
	table   string               // table is the underlying table name of the DAO.
	group   string               // group is the database configuration group name of current DAO.
	columns ExchangeGoodsColumns // columns contains all the column names of Table for convenient usage.
}

// ExchangeGoodsColumns defines and stores column names for table exchange_goods.
type ExchangeGoodsColumns struct {
	GoodsId          string //
	ExchangeIntegral string //
	IsExchange       string //
	IsHot            string //
}

// exchangeGoodsColumns holds the columns for table exchange_goods.
var exchangeGoodsColumns = ExchangeGoodsColumns{
	GoodsId:          "goods_id",
	ExchangeIntegral: "exchange_integral",
	IsExchange:       "is_exchange",
	IsHot:            "is_hot",
}

// NewExchangeGoodsDao creates and returns a new DAO object for table data access.
func NewExchangeGoodsDao() *ExchangeGoodsDao {
	return &ExchangeGoodsDao{
		group:   "default",
		table:   "exchange_goods",
		columns: exchangeGoodsColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *ExchangeGoodsDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *ExchangeGoodsDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *ExchangeGoodsDao) Columns() ExchangeGoodsColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *ExchangeGoodsDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *ExchangeGoodsDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *ExchangeGoodsDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
