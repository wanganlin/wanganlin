// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// VolumePrice is the golang structure of table volume_price for DAO operations like Where/Data.
type VolumePrice struct {
	g.Meta       `orm:"table:volume_price, do:true"`
	PriceType    interface{} //
	GoodsId      interface{} //
	VolumeNumber interface{} //
	VolumePrice  interface{} //
}
