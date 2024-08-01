// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// Stats is the golang structure of table stats for DAO operations like Where/Data.
type Stats struct {
	g.Meta        `orm:"table:stats, do:true"`
	AccessTime    interface{} //
	IpAddress     interface{} //
	VisitTimes    interface{} //
	Browser       interface{} //
	System        interface{} //
	Language      interface{} //
	Area          interface{} //
	RefererDomain interface{} //
	RefererPath   interface{} //
	AccessUrl     interface{} //
}
