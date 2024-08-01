// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// Feedback is the golang structure of table feedback for DAO operations like Where/Data.
type Feedback struct {
	g.Meta     `orm:"table:feedback, do:true"`
	MsgId      interface{} //
	ParentId   interface{} //
	UserId     interface{} //
	UserName   interface{} //
	UserEmail  interface{} //
	MsgTitle   interface{} //
	MsgType    interface{} //
	MsgStatus  interface{} //
	MsgContent interface{} //
	MsgTime    interface{} //
	MessageImg interface{} //
	OrderId    interface{} //
	MsgArea    interface{} //
}
