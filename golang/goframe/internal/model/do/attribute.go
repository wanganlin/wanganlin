// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// Attribute is the golang structure of table attribute for DAO operations like Where/Data.
type Attribute struct {
	g.Meta        `orm:"table:attribute, do:true"`
	AttrId        interface{} //
	CatId         interface{} //
	AttrName      interface{} //
	AttrInputType interface{} //
	AttrType      interface{} //
	AttrValues    interface{} //
	AttrIndex     interface{} //
	SortOrder     interface{} //
	IsLinked      interface{} //
	AttrGroup     interface{} //
}
