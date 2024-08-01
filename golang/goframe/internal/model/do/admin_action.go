// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// AdminAction is the golang structure of table admin_action for DAO operations like Where/Data.
type AdminAction struct {
	g.Meta     `orm:"table:admin_action, do:true"`
	ActionId   interface{} //
	ParentId   interface{} //
	ActionCode interface{} //
	Relevance  interface{} //
}
