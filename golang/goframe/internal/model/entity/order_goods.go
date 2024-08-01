// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// OrderGoods is the golang structure for table order_goods.
type OrderGoods struct {
	RecId         uint    `json:"recId"         orm:"rec_id"         ` //
	OrderId       uint    `json:"orderId"       orm:"order_id"       ` //
	GoodsId       uint    `json:"goodsId"       orm:"goods_id"       ` //
	GoodsName     string  `json:"goodsName"     orm:"goods_name"     ` //
	GoodsSn       string  `json:"goodsSn"       orm:"goods_sn"       ` //
	ProductId     uint    `json:"productId"     orm:"product_id"     ` //
	GoodsNumber   uint    `json:"goodsNumber"   orm:"goods_number"   ` //
	MarketPrice   float64 `json:"marketPrice"   orm:"market_price"   ` //
	GoodsPrice    float64 `json:"goodsPrice"    orm:"goods_price"    ` //
	GoodsAttr     string  `json:"goodsAttr"     orm:"goods_attr"     ` //
	SendNumber    uint    `json:"sendNumber"    orm:"send_number"    ` //
	IsReal        uint    `json:"isReal"        orm:"is_real"        ` //
	ExtensionCode string  `json:"extensionCode" orm:"extension_code" ` //
	ParentId      uint    `json:"parentId"      orm:"parent_id"      ` //
	IsGift        uint    `json:"isGift"        orm:"is_gift"        ` //
	GoodsAttrId   string  `json:"goodsAttrId"   orm:"goods_attr_id"  ` //
}
