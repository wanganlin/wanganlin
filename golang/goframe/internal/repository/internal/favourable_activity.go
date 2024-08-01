// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// FavourableActivityDao is the data access object for table favourable_activity.
type FavourableActivityDao struct {
	table   string                    // table is the underlying table name of the DAO.
	group   string                    // group is the database configuration group name of current DAO.
	columns FavourableActivityColumns // columns contains all the column names of Table for convenient usage.
}

// FavourableActivityColumns defines and stores column names for table favourable_activity.
type FavourableActivityColumns struct {
	ActId       string //
	ActName     string //
	StartTime   string //
	EndTime     string //
	UserRank    string //
	ActRange    string //
	ActRangeExt string //
	MinAmount   string //
	MaxAmount   string //
	ActType     string //
	ActTypeExt  string //
	Gift        string //
	SortOrder   string //
}

// favourableActivityColumns holds the columns for table favourable_activity.
var favourableActivityColumns = FavourableActivityColumns{
	ActId:       "act_id",
	ActName:     "act_name",
	StartTime:   "start_time",
	EndTime:     "end_time",
	UserRank:    "user_rank",
	ActRange:    "act_range",
	ActRangeExt: "act_range_ext",
	MinAmount:   "min_amount",
	MaxAmount:   "max_amount",
	ActType:     "act_type",
	ActTypeExt:  "act_type_ext",
	Gift:        "gift",
	SortOrder:   "sort_order",
}

// NewFavourableActivityDao creates and returns a new DAO object for table data access.
func NewFavourableActivityDao() *FavourableActivityDao {
	return &FavourableActivityDao{
		group:   "default",
		table:   "favourable_activity",
		columns: favourableActivityColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *FavourableActivityDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *FavourableActivityDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *FavourableActivityDao) Columns() FavourableActivityColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *FavourableActivityDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *FavourableActivityDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *FavourableActivityDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
