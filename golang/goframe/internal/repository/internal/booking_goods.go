// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// BookingGoodsDao is the data access object for table booking_goods.
type BookingGoodsDao struct {
	table   string              // table is the underlying table name of the DAO.
	group   string              // group is the database configuration group name of current DAO.
	columns BookingGoodsColumns // columns contains all the column names of Table for convenient usage.
}

// BookingGoodsColumns defines and stores column names for table booking_goods.
type BookingGoodsColumns struct {
	RecId       string //
	UserId      string //
	Email       string //
	LinkMan     string //
	Tel         string //
	GoodsId     string //
	GoodsDesc   string //
	GoodsNumber string //
	BookingTime string //
	IsDispose   string //
	DisposeUser string //
	DisposeTime string //
	DisposeNote string //
}

// bookingGoodsColumns holds the columns for table booking_goods.
var bookingGoodsColumns = BookingGoodsColumns{
	RecId:       "rec_id",
	UserId:      "user_id",
	Email:       "email",
	LinkMan:     "link_man",
	Tel:         "tel",
	GoodsId:     "goods_id",
	GoodsDesc:   "goods_desc",
	GoodsNumber: "goods_number",
	BookingTime: "booking_time",
	IsDispose:   "is_dispose",
	DisposeUser: "dispose_user",
	DisposeTime: "dispose_time",
	DisposeNote: "dispose_note",
}

// NewBookingGoodsDao creates and returns a new DAO object for table data access.
func NewBookingGoodsDao() *BookingGoodsDao {
	return &BookingGoodsDao{
		group:   "default",
		table:   "booking_goods",
		columns: bookingGoodsColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *BookingGoodsDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *BookingGoodsDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *BookingGoodsDao) Columns() BookingGoodsColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *BookingGoodsDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *BookingGoodsDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *BookingGoodsDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
