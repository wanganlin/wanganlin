// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// AffiliateLog is the golang structure of table affiliate_log for DAO operations like Where/Data.
type AffiliateLog struct {
	g.Meta       `orm:"table:affiliate_log, do:true"`
	LogId        interface{} //
	OrderId      interface{} //
	Time         interface{} //
	UserId       interface{} //
	UserName     interface{} //
	Money        interface{} //
	Point        interface{} //
	SeparateType interface{} //
}
