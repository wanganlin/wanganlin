// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// PackageGoods is the golang structure of table package_goods for DAO operations like Where/Data.
type PackageGoods struct {
	g.Meta      `orm:"table:package_goods, do:true"`
	PackageId   interface{} //
	GoodsId     interface{} //
	ProductId   interface{} //
	GoodsNumber interface{} //
	AdminId     interface{} //
}
