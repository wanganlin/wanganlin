// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// OrderAction is the golang structure of table order_action for DAO operations like Where/Data.
type OrderAction struct {
	g.Meta         `orm:"table:order_action, do:true"`
	ActionId       interface{} //
	OrderId        interface{} //
	ActionUser     interface{} //
	OrderStatus    interface{} //
	ShippingStatus interface{} //
	PayStatus      interface{} //
	ActionPlace    interface{} //
	ActionNote     interface{} //
	LogTime        interface{} //
}
