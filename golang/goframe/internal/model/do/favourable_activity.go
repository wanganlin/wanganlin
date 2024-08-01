// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// FavourableActivity is the golang structure of table favourable_activity for DAO operations like Where/Data.
type FavourableActivity struct {
	g.Meta      `orm:"table:favourable_activity, do:true"`
	ActId       interface{} //
	ActName     interface{} //
	StartTime   interface{} //
	EndTime     interface{} //
	UserRank    interface{} //
	ActRange    interface{} //
	ActRangeExt interface{} //
	MinAmount   interface{} //
	MaxAmount   interface{} //
	ActType     interface{} //
	ActTypeExt  interface{} //
	Gift        interface{} //
	SortOrder   interface{} //
}
