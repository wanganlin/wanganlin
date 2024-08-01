// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// ExchangeGoods is the golang structure for table exchange_goods.
type ExchangeGoods struct {
	GoodsId          uint `json:"goodsId"          orm:"goods_id"          ` //
	ExchangeIntegral uint `json:"exchangeIntegral" orm:"exchange_integral" ` //
	IsExchange       uint `json:"isExchange"       orm:"is_exchange"       ` //
	IsHot            uint `json:"isHot"            orm:"is_hot"            ` //
}
