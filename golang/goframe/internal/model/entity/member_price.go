// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// MemberPrice is the golang structure for table member_price.
type MemberPrice struct {
	PriceId   uint    `json:"priceId"   orm:"price_id"   ` //
	GoodsId   uint    `json:"goodsId"   orm:"goods_id"   ` //
	UserRank  int     `json:"userRank"  orm:"user_rank"  ` //
	UserPrice float64 `json:"userPrice" orm:"user_price" ` //
}
