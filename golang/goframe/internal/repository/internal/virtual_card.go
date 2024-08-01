// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// VirtualCardDao is the data access object for table virtual_card.
type VirtualCardDao struct {
	table   string             // table is the underlying table name of the DAO.
	group   string             // group is the database configuration group name of current DAO.
	columns VirtualCardColumns // columns contains all the column names of Table for convenient usage.
}

// VirtualCardColumns defines and stores column names for table virtual_card.
type VirtualCardColumns struct {
	CardId       string //
	GoodsId      string //
	CardSn       string //
	CardPassword string //
	AddDate      string //
	EndDate      string //
	IsSaled      string //
	OrderSn      string //
	Crc32        string //
}

// virtualCardColumns holds the columns for table virtual_card.
var virtualCardColumns = VirtualCardColumns{
	CardId:       "card_id",
	GoodsId:      "goods_id",
	CardSn:       "card_sn",
	CardPassword: "card_password",
	AddDate:      "add_date",
	EndDate:      "end_date",
	IsSaled:      "is_saled",
	OrderSn:      "order_sn",
	Crc32:        "crc32",
}

// NewVirtualCardDao creates and returns a new DAO object for table data access.
func NewVirtualCardDao() *VirtualCardDao {
	return &VirtualCardDao{
		group:   "default",
		table:   "virtual_card",
		columns: virtualCardColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *VirtualCardDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *VirtualCardDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *VirtualCardDao) Columns() VirtualCardColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *VirtualCardDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *VirtualCardDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *VirtualCardDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
