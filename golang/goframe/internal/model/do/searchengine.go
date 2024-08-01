// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/os/gtime"
)

// Searchengine is the golang structure of table searchengine for DAO operations like Where/Data.
type Searchengine struct {
	g.Meta       `orm:"table:searchengine, do:true"`
	Date         *gtime.Time //
	Searchengine interface{} //
	Count        interface{} //
}
