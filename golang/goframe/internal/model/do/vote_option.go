// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// VoteOption is the golang structure of table vote_option for DAO operations like Where/Data.
type VoteOption struct {
	g.Meta      `orm:"table:vote_option, do:true"`
	OptionId    interface{} //
	VoteId      interface{} //
	OptionName  interface{} //
	OptionCount interface{} //
	OptionOrder interface{} //
}
