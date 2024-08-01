// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// GoodsDao is the data access object for table goods.
type GoodsDao struct {
	table   string       // table is the underlying table name of the DAO.
	group   string       // group is the database configuration group name of current DAO.
	columns GoodsColumns // columns contains all the column names of Table for convenient usage.
}

// GoodsColumns defines and stores column names for table goods.
type GoodsColumns struct {
	GoodsId          string //
	CatId            string //
	GoodsSn          string //
	GoodsName        string //
	GoodsNameStyle   string //
	ClickCount       string //
	BrandId          string //
	ProviderName     string //
	GoodsNumber      string //
	GoodsWeight      string //
	MarketPrice      string //
	ShopPrice        string //
	PromotePrice     string //
	PromoteStartDate string //
	PromoteEndDate   string //
	WarnNumber       string //
	Keywords         string //
	GoodsBrief       string //
	GoodsDesc        string //
	GoodsThumb       string //
	GoodsImg         string //
	OriginalImg      string //
	IsReal           string //
	ExtensionCode    string //
	IsOnSale         string //
	IsAloneSale      string //
	IsShipping       string //
	Integral         string //
	AddTime          string //
	SortOrder        string //
	IsDelete         string //
	IsBest           string //
	IsNew            string //
	IsHot            string //
	IsPromote        string //
	BonusTypeId      string //
	LastUpdate       string //
	GoodsType        string //
	SellerNote       string //
	GiveIntegral     string //
	RankIntegral     string //
	SuppliersId      string //
	IsCheck          string //
}

// goodsColumns holds the columns for table goods.
var goodsColumns = GoodsColumns{
	GoodsId:          "goods_id",
	CatId:            "cat_id",
	GoodsSn:          "goods_sn",
	GoodsName:        "goods_name",
	GoodsNameStyle:   "goods_name_style",
	ClickCount:       "click_count",
	BrandId:          "brand_id",
	ProviderName:     "provider_name",
	GoodsNumber:      "goods_number",
	GoodsWeight:      "goods_weight",
	MarketPrice:      "market_price",
	ShopPrice:        "shop_price",
	PromotePrice:     "promote_price",
	PromoteStartDate: "promote_start_date",
	PromoteEndDate:   "promote_end_date",
	WarnNumber:       "warn_number",
	Keywords:         "keywords",
	GoodsBrief:       "goods_brief",
	GoodsDesc:        "goods_desc",
	GoodsThumb:       "goods_thumb",
	GoodsImg:         "goods_img",
	OriginalImg:      "original_img",
	IsReal:           "is_real",
	ExtensionCode:    "extension_code",
	IsOnSale:         "is_on_sale",
	IsAloneSale:      "is_alone_sale",
	IsShipping:       "is_shipping",
	Integral:         "integral",
	AddTime:          "add_time",
	SortOrder:        "sort_order",
	IsDelete:         "is_delete",
	IsBest:           "is_best",
	IsNew:            "is_new",
	IsHot:            "is_hot",
	IsPromote:        "is_promote",
	BonusTypeId:      "bonus_type_id",
	LastUpdate:       "last_update",
	GoodsType:        "goods_type",
	SellerNote:       "seller_note",
	GiveIntegral:     "give_integral",
	RankIntegral:     "rank_integral",
	SuppliersId:      "suppliers_id",
	IsCheck:          "is_check",
}

// NewGoodsDao creates and returns a new DAO object for table data access.
func NewGoodsDao() *GoodsDao {
	return &GoodsDao{
		group:   "default",
		table:   "goods",
		columns: goodsColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *GoodsDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *GoodsDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *GoodsDao) Columns() GoodsColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *GoodsDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *GoodsDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *GoodsDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
