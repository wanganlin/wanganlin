// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// AdminUser is the golang structure of table admin_user for DAO operations like Where/Data.
type AdminUser struct {
	g.Meta      `orm:"table:admin_user, do:true"`
	UserId      interface{} //
	UserName    interface{} //
	Email       interface{} //
	Password    interface{} //
	EcSalt      interface{} //
	AddTime     interface{} //
	LastLogin   interface{} //
	LastIp      interface{} //
	ActionList  interface{} //
	NavList     interface{} //
	LangType    interface{} //
	AgencyId    interface{} //
	SuppliersId interface{} //
	Todolist    interface{} //
	RoleId      interface{} //
}
