// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Wholesale is the golang structure for table wholesale.
type Wholesale struct {
	ActId     uint   `json:"actId"     orm:"act_id"     ` //
	GoodsId   uint   `json:"goodsId"   orm:"goods_id"   ` //
	GoodsName string `json:"goodsName" orm:"goods_name" ` //
	RankIds   string `json:"rankIds"   orm:"rank_ids"   ` //
	Prices    string `json:"prices"    orm:"prices"     ` //
	Enabled   uint   `json:"enabled"   orm:"enabled"    ` //
}
