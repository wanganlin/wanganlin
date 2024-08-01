// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// PayLog is the golang structure of table pay_log for DAO operations like Where/Data.
type PayLog struct {
	g.Meta      `orm:"table:pay_log, do:true"`
	LogId       interface{} //
	OrderId     interface{} //
	OrderAmount interface{} //
	OrderType   interface{} //
	IsPaid      interface{} //
}
