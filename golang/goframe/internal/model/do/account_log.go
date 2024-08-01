// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// AccountLog is the golang structure of table account_log for DAO operations like Where/Data.
type AccountLog struct {
	g.Meta      `orm:"table:account_log, do:true"`
	LogId       interface{} //
	UserId      interface{} //
	UserMoney   interface{} //
	FrozenMoney interface{} //
	RankPoints  interface{} //
	PayPoints   interface{} //
	ChangeTime  interface{} //
	ChangeDesc  interface{} //
	ChangeType  interface{} //
}
