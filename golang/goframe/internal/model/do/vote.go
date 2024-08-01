// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// Vote is the golang structure of table vote for DAO operations like Where/Data.
type Vote struct {
	g.Meta    `orm:"table:vote, do:true"`
	VoteId    interface{} //
	VoteName  interface{} //
	StartTime interface{} //
	EndTime   interface{} //
	CanMulti  interface{} //
	VoteCount interface{} //
}
