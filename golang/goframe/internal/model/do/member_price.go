// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// MemberPrice is the golang structure of table member_price for DAO operations like Where/Data.
type MemberPrice struct {
	g.Meta    `orm:"table:member_price, do:true"`
	PriceId   interface{} //
	GoodsId   interface{} //
	UserRank  interface{} //
	UserPrice interface{} //
}
