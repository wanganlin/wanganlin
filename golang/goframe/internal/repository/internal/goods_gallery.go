// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// GoodsGalleryDao is the data access object for table goods_gallery.
type GoodsGalleryDao struct {
	table   string              // table is the underlying table name of the DAO.
	group   string              // group is the database configuration group name of current DAO.
	columns GoodsGalleryColumns // columns contains all the column names of Table for convenient usage.
}

// GoodsGalleryColumns defines and stores column names for table goods_gallery.
type GoodsGalleryColumns struct {
	ImgId       string //
	GoodsId     string //
	ImgUrl      string //
	ImgDesc     string //
	ThumbUrl    string //
	ImgOriginal string //
}

// goodsGalleryColumns holds the columns for table goods_gallery.
var goodsGalleryColumns = GoodsGalleryColumns{
	ImgId:       "img_id",
	GoodsId:     "goods_id",
	ImgUrl:      "img_url",
	ImgDesc:     "img_desc",
	ThumbUrl:    "thumb_url",
	ImgOriginal: "img_original",
}

// NewGoodsGalleryDao creates and returns a new DAO object for table data access.
func NewGoodsGalleryDao() *GoodsGalleryDao {
	return &GoodsGalleryDao{
		group:   "default",
		table:   "goods_gallery",
		columns: goodsGalleryColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *GoodsGalleryDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *GoodsGalleryDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *GoodsGalleryDao) Columns() GoodsGalleryColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *GoodsGalleryDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *GoodsGalleryDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *GoodsGalleryDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
