// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// BookingGoods is the golang structure of table booking_goods for DAO operations like Where/Data.
type BookingGoods struct {
	g.Meta      `orm:"table:booking_goods, do:true"`
	RecId       interface{} //
	UserId      interface{} //
	Email       interface{} //
	LinkMan     interface{} //
	Tel         interface{} //
	GoodsId     interface{} //
	GoodsDesc   interface{} //
	GoodsNumber interface{} //
	BookingTime interface{} //
	IsDispose   interface{} //
	DisposeUser interface{} //
	DisposeTime interface{} //
	DisposeNote interface{} //
}
