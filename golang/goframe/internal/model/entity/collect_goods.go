// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// CollectGoods is the golang structure for table collect_goods.
type CollectGoods struct {
	RecId       uint `json:"recId"       orm:"rec_id"       ` //
	UserId      uint `json:"userId"      orm:"user_id"      ` //
	GoodsId     uint `json:"goodsId"     orm:"goods_id"     ` //
	AddTime     uint `json:"addTime"     orm:"add_time"     ` //
	IsAttention int  `json:"isAttention" orm:"is_attention" ` //
}
