// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// BackOrderDao is the data access object for table back_order.
type BackOrderDao struct {
	table   string           // table is the underlying table name of the DAO.
	group   string           // group is the database configuration group name of current DAO.
	columns BackOrderColumns // columns contains all the column names of Table for convenient usage.
}

// BackOrderColumns defines and stores column names for table back_order.
type BackOrderColumns struct {
	BackId       string //
	DeliverySn   string //
	OrderSn      string //
	OrderId      string //
	InvoiceNo    string //
	AddTime      string //
	ShippingId   string //
	ShippingName string //
	UserId       string //
	ActionUser   string //
	Consignee    string //
	Address      string //
	Country      string //
	Province     string //
	City         string //
	District     string //
	SignBuilding string //
	Email        string //
	Zipcode      string //
	Tel          string //
	Mobile       string //
	BestTime     string //
	Postscript   string //
	HowOos       string //
	InsureFee    string //
	ShippingFee  string //
	UpdateTime   string //
	SuppliersId  string //
	Status       string //
	ReturnTime   string //
	AgencyId     string //
}

// backOrderColumns holds the columns for table back_order.
var backOrderColumns = BackOrderColumns{
	BackId:       "back_id",
	DeliverySn:   "delivery_sn",
	OrderSn:      "order_sn",
	OrderId:      "order_id",
	InvoiceNo:    "invoice_no",
	AddTime:      "add_time",
	ShippingId:   "shipping_id",
	ShippingName: "shipping_name",
	UserId:       "user_id",
	ActionUser:   "action_user",
	Consignee:    "consignee",
	Address:      "address",
	Country:      "country",
	Province:     "province",
	City:         "city",
	District:     "district",
	SignBuilding: "sign_building",
	Email:        "email",
	Zipcode:      "zipcode",
	Tel:          "tel",
	Mobile:       "mobile",
	BestTime:     "best_time",
	Postscript:   "postscript",
	HowOos:       "how_oos",
	InsureFee:    "insure_fee",
	ShippingFee:  "shipping_fee",
	UpdateTime:   "update_time",
	SuppliersId:  "suppliers_id",
	Status:       "status",
	ReturnTime:   "return_time",
	AgencyId:     "agency_id",
}

// NewBackOrderDao creates and returns a new DAO object for table data access.
func NewBackOrderDao() *BackOrderDao {
	return &BackOrderDao{
		group:   "default",
		table:   "back_order",
		columns: backOrderColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *BackOrderDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *BackOrderDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *BackOrderDao) Columns() BackOrderColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *BackOrderDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *BackOrderDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *BackOrderDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
