// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// OrderInfoDao is the data access object for table order_info.
type OrderInfoDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns OrderInfoColumns // columns contains all the column names of Table for convenient usage.
}

// OrderInfoColumns defines and stores column names for table order_info.
type OrderInfoColumns struct {
	OrderId        string //
	OrderSn        string //
	UserId         string //
	OrderStatus    string //
	ShippingStatus string //
	PayStatus      string //
	Consignee      string //
	Country        string //
	Province       string //
	City           string //
	District       string //
	Address        string //
	Zipcode        string //
	Tel            string //
	Mobile         string //
	Email          string //
	BestTime       string //
	SignBuilding   string //
	Postscript     string //
	ShippingId     string //
	ShippingName   string //
	PayId          string //
	PayName        string //
	HowOos         string //
	HowSurplus     string //
	PackName       string //
	CardName       string //
	CardMessage    string //
	InvPayee       string //
	InvContent     string //
	GoodsAmount    string //
	ShippingFee    string //
	InsureFee      string //
	PayFee         string //
	PackFee        string //
	CardFee        string //
	MoneyPaid      string //
	Surplus        string //
	Integral       string //
	IntegralMoney  string //
	Bonus          string //
	OrderAmount    string //
	FromAd         string //
	Referer        string //
	AddTime        string //
	ConfirmTime    string //
	PayTime        string //
	ShippingTime   string //
	PackId         string //
	CardId         string //
	BonusId        string //
	InvoiceNo      string //
	ExtensionCode  string //
	ExtensionId    string //
	ToBuyer        string //
	PayNote        string //
	AgencyId       string //
	InvType        string //
	Tax            string //
	IsSeparate     string //
	ParentId       string //
	Discount       string //
}

// orderInfoColumns holds the columns for table order_info.
var orderInfoColumns = OrderInfoColumns{
	OrderId:        "order_id",
	OrderSn:        "order_sn",
	UserId:         "user_id",
	OrderStatus:    "order_status",
	ShippingStatus: "shipping_status",
	PayStatus:      "pay_status",
	Consignee:      "consignee",
	Country:        "country",
	Province:       "province",
	City:           "city",
	District:       "district",
	Address:        "address",
	Zipcode:        "zipcode",
	Tel:            "tel",
	Mobile:         "mobile",
	Email:          "email",
	BestTime:       "best_time",
	SignBuilding:   "sign_building",
	Postscript:     "postscript",
	ShippingId:     "shipping_id",
	ShippingName:   "shipping_name",
	PayId:          "pay_id",
	PayName:        "pay_name",
	HowOos:         "how_oos",
	HowSurplus:     "how_surplus",
	PackName:       "pack_name",
	CardName:       "card_name",
	CardMessage:    "card_message",
	InvPayee:       "inv_payee",
	InvContent:     "inv_content",
	GoodsAmount:    "goods_amount",
	ShippingFee:    "shipping_fee",
	InsureFee:      "insure_fee",
	PayFee:         "pay_fee",
	PackFee:        "pack_fee",
	CardFee:        "card_fee",
	MoneyPaid:      "money_paid",
	Surplus:        "surplus",
	Integral:       "integral",
	IntegralMoney:  "integral_money",
	Bonus:          "bonus",
	OrderAmount:    "order_amount",
	FromAd:         "from_ad",
	Referer:        "referer",
	AddTime:        "add_time",
	ConfirmTime:    "confirm_time",
	PayTime:        "pay_time",
	ShippingTime:   "shipping_time",
	PackId:         "pack_id",
	CardId:         "card_id",
	BonusId:        "bonus_id",
	InvoiceNo:      "invoice_no",
	ExtensionCode:  "extension_code",
	ExtensionId:    "extension_id",
	ToBuyer:        "to_buyer",
	PayNote:        "pay_note",
	AgencyId:       "agency_id",
	InvType:        "inv_type",
	Tax:            "tax",
	IsSeparate:     "is_separate",
	ParentId:       "parent_id",
	Discount:       "discount",
}

// NewOrderInfoDao creates and returns a new DAO object for table data access.
func NewOrderInfoDao() *OrderInfoDao {
	return &OrderInfoDao{
		group:   "default",
		table:   "order_info",
		columns: orderInfoColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *OrderInfoDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *OrderInfoDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *OrderInfoDao) Columns() OrderInfoColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *OrderInfoDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *OrderInfoDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *OrderInfoDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
