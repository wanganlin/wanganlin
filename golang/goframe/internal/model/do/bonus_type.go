// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// BonusType is the golang structure of table bonus_type for DAO operations like Where/Data.
type BonusType struct {
	g.Meta         `orm:"table:bonus_type, do:true"`
	TypeId         interface{} //
	TypeName       interface{} //
	TypeMoney      interface{} //
	SendType       interface{} //
	MinAmount      interface{} //
	MaxAmount      interface{} //
	SendStartDate  interface{} //
	SendEndDate    interface{} //
	UseStartDate   interface{} //
	UseEndDate     interface{} //
	MinGoodsAmount interface{} //
}
