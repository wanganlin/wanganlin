// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// OrderGoods is the golang structure of table order_goods for DAO operations like Where/Data.
type OrderGoods struct {
	g.Meta        `orm:"table:order_goods, do:true"`
	RecId         interface{} //
	OrderId       interface{} //
	GoodsId       interface{} //
	GoodsName     interface{} //
	GoodsSn       interface{} //
	ProductId     interface{} //
	GoodsNumber   interface{} //
	MarketPrice   interface{} //
	GoodsPrice    interface{} //
	GoodsAttr     interface{} //
	SendNumber    interface{} //
	IsReal        interface{} //
	ExtensionCode interface{} //
	ParentId      interface{} //
	IsGift        interface{} //
	GoodsAttrId   interface{} //
}
