// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// GroupGoods is the golang structure of table group_goods for DAO operations like Where/Data.
type GroupGoods struct {
	g.Meta     `orm:"table:group_goods, do:true"`
	ParentId   interface{} //
	GoodsId    interface{} //
	GoodsPrice interface{} //
	AdminId    interface{} //
}
