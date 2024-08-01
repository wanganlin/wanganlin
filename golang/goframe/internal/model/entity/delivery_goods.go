// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// DeliveryGoods is the golang structure for table delivery_goods.
type DeliveryGoods struct {
	RecId         uint   `json:"recId"         orm:"rec_id"         ` //
	DeliveryId    uint   `json:"deliveryId"    orm:"delivery_id"    ` //
	GoodsId       uint   `json:"goodsId"       orm:"goods_id"       ` //
	ProductId     uint   `json:"productId"     orm:"product_id"     ` //
	ProductSn     string `json:"productSn"     orm:"product_sn"     ` //
	GoodsName     string `json:"goodsName"     orm:"goods_name"     ` //
	BrandName     string `json:"brandName"     orm:"brand_name"     ` //
	GoodsSn       string `json:"goodsSn"       orm:"goods_sn"       ` //
	IsReal        uint   `json:"isReal"        orm:"is_real"        ` //
	ExtensionCode string `json:"extensionCode" orm:"extension_code" ` //
	ParentId      uint   `json:"parentId"      orm:"parent_id"      ` //
	SendNumber    uint   `json:"sendNumber"    orm:"send_number"    ` //
	GoodsAttr     string `json:"goodsAttr"     orm:"goods_attr"     ` //
}
