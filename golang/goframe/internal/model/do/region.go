// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// Region is the golang structure of table region for DAO operations like Where/Data.
type Region struct {
	g.Meta     `orm:"table:region, do:true"`
	RegionId   interface{} //
	ParentId   interface{} //
	RegionName interface{} //
	RegionType interface{} //
	AgencyId   interface{} //
}
