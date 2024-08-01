// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// EmailSendlist is the golang structure of table email_sendlist for DAO operations like Where/Data.
type EmailSendlist struct {
	g.Meta       `orm:"table:email_sendlist, do:true"`
	Id           interface{} //
	Email        interface{} //
	TemplateId   interface{} //
	EmailContent interface{} //
	Error        interface{} //
	Pri          interface{} //
	LastSend     interface{} //
}
