// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// AdDao is the data access object for table ad.
type AdDao struct {
	table   string    // table is the underlying table name of the DAO.
	group   string    // group is the database configuration group name of current DAO.
	columns AdColumns // columns contains all the column names of Table for convenient usage.
}

// AdColumns defines and stores column names for table ad.
type AdColumns struct {
	AdId       string //
	PositionId string //
	MediaType  string //
	AdName     string //
	AdLink     string //
	AdCode     string //
	StartTime  string //
	EndTime    string //
	LinkMan    string //
	LinkEmail  string //
	LinkPhone  string //
	ClickCount string //
	Enabled    string //
}

// adColumns holds the columns for table ad.
var adColumns = AdColumns{
	AdId:       "ad_id",
	PositionId: "position_id",
	MediaType:  "media_type",
	AdName:     "ad_name",
	AdLink:     "ad_link",
	AdCode:     "ad_code",
	StartTime:  "start_time",
	EndTime:    "end_time",
	LinkMan:    "link_man",
	LinkEmail:  "link_email",
	LinkPhone:  "link_phone",
	ClickCount: "click_count",
	Enabled:    "enabled",
}

// NewAdDao creates and returns a new DAO object for table data access.
func NewAdDao() *AdDao {
	return &AdDao{
		group:   "default",
		table:   "ad",
		columns: adColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *AdDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *AdDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *AdDao) Columns() AdColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *AdDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *AdDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *AdDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
