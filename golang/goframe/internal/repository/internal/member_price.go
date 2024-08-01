// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// MemberPriceDao is the data access object for table member_price.
type MemberPriceDao struct {
	table   string             // table is the underlying table name of the DAO.
	group   string             // group is the database configuration group name of current DAO.
	columns MemberPriceColumns // columns contains all the column names of Table for convenient usage.
}

// MemberPriceColumns defines and stores column names for table member_price.
type MemberPriceColumns struct {
	PriceId   string //
	GoodsId   string //
	UserRank  string //
	UserPrice string //
}

// memberPriceColumns holds the columns for table member_price.
var memberPriceColumns = MemberPriceColumns{
	PriceId:   "price_id",
	GoodsId:   "goods_id",
	UserRank:  "user_rank",
	UserPrice: "user_price",
}

// NewMemberPriceDao creates and returns a new DAO object for table data access.
func NewMemberPriceDao() *MemberPriceDao {
	return &MemberPriceDao{
		group:   "default",
		table:   "member_price",
		columns: memberPriceColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *MemberPriceDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *MemberPriceDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *MemberPriceDao) Columns() MemberPriceColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *MemberPriceDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *MemberPriceDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *MemberPriceDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
