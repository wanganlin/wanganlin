// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// VirtualCard is the golang structure for table virtual_card.
type VirtualCard struct {
	CardId       int    `json:"cardId"       orm:"card_id"       ` //
	GoodsId      uint   `json:"goodsId"      orm:"goods_id"      ` //
	CardSn       string `json:"cardSn"       orm:"card_sn"       ` //
	CardPassword string `json:"cardPassword" orm:"card_password" ` //
	AddDate      int    `json:"addDate"      orm:"add_date"      ` //
	EndDate      int    `json:"endDate"      orm:"end_date"      ` //
	IsSaled      int    `json:"isSaled"      orm:"is_saled"      ` //
	OrderSn      string `json:"orderSn"      orm:"order_sn"      ` //
	Crc32        string `json:"crc32"        orm:"crc32"         ` //
}
