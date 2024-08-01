// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// GoodsActivityDao is the data access object for table goods_activity.
type GoodsActivityDao struct {
	table   string               // table is the underlying table name of the DAO.
	group   string               // group is the database configuration group name of current DAO.
	columns GoodsActivityColumns // columns contains all the column names of Table for convenient usage.
}

// GoodsActivityColumns defines and stores column names for table goods_activity.
type GoodsActivityColumns struct {
	ActId      string //
	ActName    string //
	ActDesc    string //
	ActType    string //
	GoodsId    string //
	ProductId  string //
	GoodsName  string //
	StartTime  string //
	EndTime    string //
	IsFinished string //
	ExtInfo    string //
}

// goodsActivityColumns holds the columns for table goods_activity.
var goodsActivityColumns = GoodsActivityColumns{
	ActId:      "act_id",
	ActName:    "act_name",
	ActDesc:    "act_desc",
	ActType:    "act_type",
	GoodsId:    "goods_id",
	ProductId:  "product_id",
	GoodsName:  "goods_name",
	StartTime:  "start_time",
	EndTime:    "end_time",
	IsFinished: "is_finished",
	ExtInfo:    "ext_info",
}

// NewGoodsActivityDao creates and returns a new DAO object for table data access.
func NewGoodsActivityDao() *GoodsActivityDao {
	return &GoodsActivityDao{
		group:   "default",
		table:   "goods_activity",
		columns: goodsActivityColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *GoodsActivityDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *GoodsActivityDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *GoodsActivityDao) Columns() GoodsActivityColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *GoodsActivityDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *GoodsActivityDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *GoodsActivityDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
