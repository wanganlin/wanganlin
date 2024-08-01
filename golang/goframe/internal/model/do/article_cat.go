// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// ArticleCat is the golang structure of table article_cat for DAO operations like Where/Data.
type ArticleCat struct {
	g.Meta    `orm:"table:article_cat, do:true"`
	CatId     interface{} //
	CatName   interface{} //
	CatType   interface{} //
	Keywords  interface{} //
	CatDesc   interface{} //
	SortOrder interface{} //
	ShowInNav interface{} //
	ParentId  interface{} //
}
