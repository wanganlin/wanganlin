// ==========================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// ==========================================================================

package internal

import (
	"context"

	"github.com/gogf/gf/v2/database/gdb"
	"github.com/gogf/gf/v2/frame/g"
)

// ArticleDao is the data access object for table article.
type ArticleDao struct {
	table   string         // table is the underlying table name of the DAO.
	group   string         // group is the database configuration group name of current DAO.
	columns ArticleColumns // columns contains all the column names of Table for convenient usage.
}

// ArticleColumns defines and stores column names for table article.
type ArticleColumns struct {
	ArticleId   string //
	CatId       string //
	Title       string //
	Content     string //
	Author      string //
	AuthorEmail string //
	Keywords    string //
	ArticleType string //
	IsOpen      string //
	AddTime     string //
	FileUrl     string //
	OpenType    string //
	Link        string //
	Description string //
}

// articleColumns holds the columns for table article.
var articleColumns = ArticleColumns{
	ArticleId:   "article_id",
	CatId:       "cat_id",
	Title:       "title",
	Content:     "content",
	Author:      "author",
	AuthorEmail: "author_email",
	Keywords:    "keywords",
	ArticleType: "article_type",
	IsOpen:      "is_open",
	AddTime:     "add_time",
	FileUrl:     "file_url",
	OpenType:    "open_type",
	Link:        "link",
	Description: "description",
}

// NewArticleDao creates and returns a new DAO object for table data access.
func NewArticleDao() *ArticleDao {
	return &ArticleDao{
		group:   "default",
		table:   "article",
		columns: articleColumns,
	}
}

// DB retrieves and returns the underlying raw database management object of current DAO.
func (dao *ArticleDao) DB() gdb.DB {
	return g.DB(dao.group)
}

// Table returns the table name of current dao.
func (dao *ArticleDao) Table() string {
	return dao.table
}

// Columns returns all column names of current dao.
func (dao *ArticleDao) Columns() ArticleColumns {
	return dao.columns
}

// Group returns the configuration group name of database of current dao.
func (dao *ArticleDao) Group() string {
	return dao.group
}

// Ctx creates and returns the Model for current DAO, It automatically sets the context for current operation.
func (dao *ArticleDao) Ctx(ctx context.Context) *gdb.Model {
	return dao.DB().Model(dao.table).Safe().Ctx(ctx)
}

// Transaction wraps the transaction logic using function f.
// It rollbacks the transaction and returns the error from function f if it returns non-nil error.
// It commits the transaction and returns nil if function f returns nil.
//
// Note that, you should not Commit or Rollback the transaction in function f
// as it is automatically handled by this function.
func (dao *ArticleDao) Transaction(ctx context.Context, f func(ctx context.Context, tx gdb.TX) error) (err error) {
	return dao.Ctx(ctx).Transaction(ctx, f)
}
