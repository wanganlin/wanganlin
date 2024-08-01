// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// LinkGoods is the golang structure for table link_goods.
type LinkGoods struct {
	GoodsId     uint `json:"goodsId"     orm:"goods_id"      ` //
	LinkGoodsId uint `json:"linkGoodsId" orm:"link_goods_id" ` //
	IsDouble    uint `json:"isDouble"    orm:"is_double"     ` //
	AdminId     uint `json:"adminId"     orm:"admin_id"      ` //
}
