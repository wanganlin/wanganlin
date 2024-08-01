// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/os/gtime"
)

// Users is the golang structure of table users for DAO operations like Where/Data.
type Users struct {
	g.Meta         `orm:"table:users, do:true"`
	UserId         interface{} //
	Email          interface{} //
	UserName       interface{} //
	Password       interface{} //
	Question       interface{} //
	Answer         interface{} //
	Sex            interface{} //
	Birthday       *gtime.Time //
	UserMoney      interface{} //
	FrozenMoney    interface{} //
	PayPoints      interface{} //
	RankPoints     interface{} //
	AddressId      interface{} //
	RegTime        interface{} //
	LastLogin      interface{} //
	LastTime       *gtime.Time //
	LastIp         interface{} //
	VisitCount     interface{} //
	UserRank       interface{} //
	IsSpecial      interface{} //
	EcSalt         interface{} //
	Salt           interface{} //
	ParentId       interface{} //
	Flag           interface{} //
	Alias          interface{} //
	Msn            interface{} //
	Qq             interface{} //
	OfficePhone    interface{} //
	HomePhone      interface{} //
	MobilePhone    interface{} //
	IsValidated    interface{} //
	CreditLine     interface{} //
	PasswdQuestion interface{} //
	PasswdAnswer   interface{} //
}
