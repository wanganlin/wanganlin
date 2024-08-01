// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// VoteLog is the golang structure of table vote_log for DAO operations like Where/Data.
type VoteLog struct {
	g.Meta    `orm:"table:vote_log, do:true"`
	LogId     interface{} //
	VoteId    interface{} //
	IpAddress interface{} //
	VoteTime  interface{} //
}
