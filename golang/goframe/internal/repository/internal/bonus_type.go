// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// BonusTypeDao is the data access object for table bonus_type.
type BonusTypeDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns BonusTypeColumns // columns contains all the column names of Table for convenient usage.
}

// BonusTypeColumns defines and stores column names for table bonus_type.
type BonusTypeColumns struct {
	TypeId         string //
	TypeName       string //
	TypeMoney      string //
	SendType       string //
	MinAmount      string //
	MaxAmount      string //
	SendStartDate  string //
	SendEndDate    string //
	UseStartDate   string //
	UseEndDate     string //
	MinGoodsAmount string //
}

// bonusTypeColumns holds the columns for table bonus_type.
var bonusTypeColumns = BonusTypeColumns{
	TypeId:         "type_id",
	TypeName:       "type_name",
	TypeMoney:      "type_money",
	SendType:       "send_type",
	MinAmount:      "min_amount",
	MaxAmount:      "max_amount",
	SendStartDate:  "send_start_date",
	SendEndDate:    "send_end_date",
	UseStartDate:   "use_start_date",
	UseEndDate:     "use_end_date",
	MinGoodsAmount: "min_goods_amount",
}

// NewBonusTypeDao creates and returns a new DAO object for table data access.
func NewBonusTypeDao() *BonusTypeDao {
	return &BonusTypeDao{
		group:   "default",
		table:   "bonus_type",
		columns: bonusTypeColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *BonusTypeDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *BonusTypeDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *BonusTypeDao) Columns() BonusTypeColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *BonusTypeDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *BonusTypeDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *BonusTypeDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
