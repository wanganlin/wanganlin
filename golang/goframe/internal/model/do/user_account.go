// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// UserAccount is the golang structure of table user_account for DAO operations like Where/Data.
type UserAccount struct {
	g.Meta      `orm:"table:user_account, do:true"`
	Id          interface{} //
	UserId      interface{} //
	AdminUser   interface{} //
	Amount      interface{} //
	AddTime     interface{} //
	PaidTime    interface{} //
	AdminNote   interface{} //
	UserNote    interface{} //
	ProcessType interface{} //
	Payment     interface{} //
	IsPaid      interface{} //
}
