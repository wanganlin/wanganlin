// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// GoodsAttr is the golang structure of table goods_attr for DAO operations like Where/Data.
type GoodsAttr struct {
	g.Meta      `orm:"table:goods_attr, do:true"`
	GoodsAttrId interface{} //
	GoodsId     interface{} //
	AttrId      interface{} //
	AttrValue   interface{} //
	AttrPrice   interface{} //
}
