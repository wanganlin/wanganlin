// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// ExchangeGoods is the golang structure of table exchange_goods for DAO operations like Where/Data.
type ExchangeGoods struct {
	g.Meta           `orm:"table:exchange_goods, do:true"`
	GoodsId          interface{} //
	ExchangeIntegral interface{} //
	IsExchange       interface{} //
	IsHot            interface{} //
}
