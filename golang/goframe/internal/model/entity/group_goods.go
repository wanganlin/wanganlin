// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// GroupGoods is the golang structure for table group_goods.
type GroupGoods struct {
	ParentId   uint    `json:"parentId"   orm:"parent_id"   ` //
	GoodsId    uint    `json:"goodsId"    orm:"goods_id"    ` //
	GoodsPrice float64 `json:"goodsPrice" orm:"goods_price" ` //
	AdminId    uint    `json:"adminId"    orm:"admin_id"    ` //
}
