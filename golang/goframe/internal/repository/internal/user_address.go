// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// UserAddressDao is the data access object for table user_address.
type UserAddressDao struct {
	table   string             // table is the underlying table name of the DAO.
	group   string             // group is the database configuration group name of current DAO.
	columns UserAddressColumns // columns contains all the column names of Table for convenient usage.
}

// UserAddressColumns defines and stores column names for table user_address.
type UserAddressColumns struct {
	AddressId    string //
	AddressName  string //
	UserId       string //
	Consignee    string //
	Email        string //
	Country      string //
	Province     string //
	City         string //
	District     string //
	Address      string //
	Zipcode      string //
	Tel          string //
	Mobile       string //
	SignBuilding string //
	BestTime     string //
}

// userAddressColumns holds the columns for table user_address.
var userAddressColumns = UserAddressColumns{
	AddressId:    "address_id",
	AddressName:  "address_name",
	UserId:       "user_id",
	Consignee:    "consignee",
	Email:        "email",
	Country:      "country",
	Province:     "province",
	City:         "city",
	District:     "district",
	Address:      "address",
	Zipcode:      "zipcode",
	Tel:          "tel",
	Mobile:       "mobile",
	SignBuilding: "sign_building",
	BestTime:     "best_time",
}

// NewUserAddressDao creates and returns a new DAO object for table data access.
func NewUserAddressDao() *UserAddressDao {
	return &UserAddressDao{
		group:   "default",
		table:   "user_address",
		columns: userAddressColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *UserAddressDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *UserAddressDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *UserAddressDao) Columns() UserAddressColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *UserAddressDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *UserAddressDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *UserAddressDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
