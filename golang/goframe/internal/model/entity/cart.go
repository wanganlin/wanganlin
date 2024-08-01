// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Cart is the golang structure for table cart.
type Cart struct {
	RecId         uint    `json:"recId"         orm:"rec_id"         ` //
	UserId        uint    `json:"userId"        orm:"user_id"        ` //
	SessionId     string  `json:"sessionId"     orm:"session_id"     ` //
	GoodsId       uint    `json:"goodsId"       orm:"goods_id"       ` //
	GoodsSn       string  `json:"goodsSn"       orm:"goods_sn"       ` //
	ProductId     uint    `json:"productId"     orm:"product_id"     ` //
	GoodsName     string  `json:"goodsName"     orm:"goods_name"     ` //
	MarketPrice   float64 `json:"marketPrice"   orm:"market_price"   ` //
	GoodsPrice    float64 `json:"goodsPrice"    orm:"goods_price"    ` //
	GoodsNumber   uint    `json:"goodsNumber"   orm:"goods_number"   ` //
	GoodsAttr     string  `json:"goodsAttr"     orm:"goods_attr"     ` //
	IsReal        uint    `json:"isReal"        orm:"is_real"        ` //
	ExtensionCode string  `json:"extensionCode" orm:"extension_code" ` //
	ParentId      uint    `json:"parentId"      orm:"parent_id"      ` //
	RecType       uint    `json:"recType"       orm:"rec_type"       ` //
	IsGift        uint    `json:"isGift"        orm:"is_gift"        ` //
	IsShipping    uint    `json:"isShipping"    orm:"is_shipping"    ` //
	CanHandsel    uint    `json:"canHandsel"    orm:"can_handsel"    ` //
	GoodsAttrId   string  `json:"goodsAttrId"   orm:"goods_attr_id"  ` //
}
