// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// Article is the golang structure of table article for DAO operations like Where/Data.
type Article struct {
	g.Meta      `orm:"table:article, do:true"`
	ArticleId   interface{} //
	CatId       interface{} //
	Title       interface{} //
	Content     interface{} //
	Author      interface{} //
	AuthorEmail interface{} //
	Keywords    interface{} //
	ArticleType interface{} //
	IsOpen      interface{} //
	AddTime     interface{} //
	FileUrl     interface{} //
	OpenType    interface{} //
	Link        interface{} //
	Description interface{} //
}
