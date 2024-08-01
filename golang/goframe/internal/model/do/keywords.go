// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/os/gtime"
)

// Keywords is the golang structure of table keywords for DAO operations like Where/Data.
type Keywords struct {
	g.Meta       `orm:"table:keywords, do:true"`
	Date         *gtime.Time //
	Searchengine interface{} //
	Keyword      interface{} //
	Count        interface{} //
}
