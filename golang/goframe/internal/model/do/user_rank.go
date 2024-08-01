// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// UserRank is the golang structure of table user_rank for DAO operations like Where/Data.
type UserRank struct {
	g.Meta      `orm:"table:user_rank, do:true"`
	RankId      interface{} //
	RankName    interface{} //
	MinPoints   interface{} //
	MaxPoints   interface{} //
	Discount    interface{} //
	ShowPrice   interface{} //
	SpecialRank interface{} //
}
