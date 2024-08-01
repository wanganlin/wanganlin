// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// BookingGoods is the golang structure for table booking_goods.
type BookingGoods struct {
	RecId       uint   `json:"recId"       orm:"rec_id"       ` //
	UserId      uint   `json:"userId"      orm:"user_id"      ` //
	Email       string `json:"email"       orm:"email"        ` //
	LinkMan     string `json:"linkMan"     orm:"link_man"     ` //
	Tel         string `json:"tel"         orm:"tel"          ` //
	GoodsId     uint   `json:"goodsId"     orm:"goods_id"     ` //
	GoodsDesc   string `json:"goodsDesc"   orm:"goods_desc"   ` //
	GoodsNumber uint   `json:"goodsNumber" orm:"goods_number" ` //
	BookingTime uint   `json:"bookingTime" orm:"booking_time" ` //
	IsDispose   uint   `json:"isDispose"   orm:"is_dispose"   ` //
	DisposeUser string `json:"disposeUser" orm:"dispose_user" ` //
	DisposeTime uint   `json:"disposeTime" orm:"dispose_time" ` //
	DisposeNote string `json:"disposeNote" orm:"dispose_note" ` //
}
