// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// AuctionLog is the golang structure of table auction_log for DAO operations like Where/Data.
type AuctionLog struct {
	g.Meta   `orm:"table:auction_log, do:true"`
	LogId    interface{} //
	ActId    interface{} //
	BidUser  interface{} //
	BidPrice interface{} //
	BidTime  interface{} //
}
