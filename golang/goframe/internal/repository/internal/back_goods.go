// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// BackGoodsDao is the data access object for table back_goods.
type BackGoodsDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns BackGoodsColumns // columns contains all the column names of Table for convenient usage.
}

// BackGoodsColumns defines and stores column names for table back_goods.
type BackGoodsColumns struct {
	RecId      string //
	BackId     string //
	GoodsId    string //
	ProductId  string //
	ProductSn  string //
	GoodsName  string //
	BrandName  string //
	GoodsSn    string //
	IsReal     string //
	SendNumber string //
	GoodsAttr  string //
}

// backGoodsColumns holds the columns for table back_goods.
var backGoodsColumns = BackGoodsColumns{
	RecId:      "rec_id",
	BackId:     "back_id",
	GoodsId:    "goods_id",
	ProductId:  "product_id",
	ProductSn:  "product_sn",
	GoodsName:  "goods_name",
	BrandName:  "brand_name",
	GoodsSn:    "goods_sn",
	IsReal:     "is_real",
	SendNumber: "send_number",
	GoodsAttr:  "goods_attr",
}

// NewBackGoodsDao creates and returns a new DAO object for table data access.
func NewBackGoodsDao() *BackGoodsDao {
	return &BackGoodsDao{
		group:   "default",
		table:   "back_goods",
		columns: backGoodsColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *BackGoodsDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *BackGoodsDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *BackGoodsDao) Columns() BackGoodsColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *BackGoodsDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *BackGoodsDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *BackGoodsDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
