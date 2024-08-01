// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// UserFeed is the golang structure for table user_feed.
type UserFeed struct {
	FeedId   uint `json:"feedId"   orm:"feed_id"   ` //
	UserId   uint `json:"userId"   orm:"user_id"   ` //
	ValueId  uint `json:"valueId"  orm:"value_id"  ` //
	GoodsId  uint `json:"goodsId"  orm:"goods_id"  ` //
	FeedType uint `json:"feedType" orm:"feed_type" ` //
	IsFeed   uint `json:"isFeed"   orm:"is_feed"   ` //
}
