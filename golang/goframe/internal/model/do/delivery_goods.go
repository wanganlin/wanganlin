// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// DeliveryGoods is the golang structure of table delivery_goods for DAO operations like Where/Data.
type DeliveryGoods struct {
	g.Meta        `orm:"table:delivery_goods, do:true"`
	RecId         interface{} //
	DeliveryId    interface{} //
	GoodsId       interface{} //
	ProductId     interface{} //
	ProductSn     interface{} //
	GoodsName     interface{} //
	BrandName     interface{} //
	GoodsSn       interface{} //
	IsReal        interface{} //
	ExtensionCode interface{} //
	ParentId      interface{} //
	SendNumber    interface{} //
	GoodsAttr     interface{} //
}
