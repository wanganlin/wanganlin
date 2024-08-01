// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// ErrorLog is the golang structure of table error_log for DAO operations like Where/Data.
type ErrorLog struct {
	g.Meta `orm:"table:error_log, do:true"`
	Id     interface{} //
	Info   interface{} //
	File   interface{} //
	Time   interface{} //
}
