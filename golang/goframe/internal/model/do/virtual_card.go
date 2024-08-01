// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// VirtualCard is the golang structure of table virtual_card for DAO operations like Where/Data.
type VirtualCard struct {
	g.Meta       `orm:"table:virtual_card, do:true"`
	CardId       interface{} //
	GoodsId      interface{} //
	CardSn       interface{} //
	CardPassword interface{} //
	AddDate      interface{} //
	EndDate      interface{} //
	IsSaled      interface{} //
	OrderSn      interface{} //
	Crc32        interface{} //
}
