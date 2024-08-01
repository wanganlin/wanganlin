// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// SnatchLog is the golang structure of table snatch_log for DAO operations like Where/Data.
type SnatchLog struct {
	g.Meta   `orm:"table:snatch_log, do:true"`
	LogId    interface{} //
	SnatchId interface{} //
	UserId   interface{} //
	BidPrice interface{} //
	BidTime  interface{} //
}
