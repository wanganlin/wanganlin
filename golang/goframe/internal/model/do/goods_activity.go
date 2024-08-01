// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// GoodsActivity is the golang structure of table goods_activity for DAO operations like Where/Data.
type GoodsActivity struct {
	g.Meta     `orm:"table:goods_activity, do:true"`
	ActId      interface{} //
	ActName    interface{} //
	ActDesc    interface{} //
	ActType    interface{} //
	GoodsId    interface{} //
	ProductId  interface{} //
	GoodsName  interface{} //
	StartTime  interface{} //
	EndTime    interface{} //
	IsFinished interface{} //
	ExtInfo    interface{} //
}
