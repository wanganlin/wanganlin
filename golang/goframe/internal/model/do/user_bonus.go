// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// UserBonus is the golang structure of table user_bonus for DAO operations like Where/Data.
type UserBonus struct {
	g.Meta      `orm:"table:user_bonus, do:true"`
	BonusId     interface{} //
	BonusTypeId interface{} //
	BonusSn     interface{} //
	UserId      interface{} //
	UsedTime    interface{} //
	OrderId     interface{} //
	Emailed     interface{} //
}
