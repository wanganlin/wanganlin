// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Tag is the golang structure for table tag.
type Tag struct {
	TagId    int    `json:"tagId"    orm:"tag_id"    ` //
	UserId   uint   `json:"userId"   orm:"user_id"   ` //
	GoodsId  uint   `json:"goodsId"  orm:"goods_id"  ` //
	TagWords string `json:"tagWords" orm:"tag_words" ` //
}
