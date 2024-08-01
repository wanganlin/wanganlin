// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// VolumePrice is the golang structure for table volume_price.
type VolumePrice struct {
	PriceType    uint    `json:"priceType"    orm:"price_type"    ` //
	GoodsId      uint    `json:"goodsId"      orm:"goods_id"      ` //
	VolumeNumber uint    `json:"volumeNumber" orm:"volume_number" ` //
	VolumePrice  float64 `json:"volumePrice"  orm:"volume_price"  ` //
}
