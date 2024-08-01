// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// AdminMessage is the golang structure of table admin_message for DAO operations like Where/Data.
type AdminMessage struct {
	g.Meta     `orm:"table:admin_message, do:true"`
	MessageId  interface{} //
	SenderId   interface{} //
	ReceiverId interface{} //
	SentTime   interface{} //
	ReadTime   interface{} //
	Readed     interface{} //
	Deleted    interface{} //
	Title      interface{} //
	Message    interface{} //
}
