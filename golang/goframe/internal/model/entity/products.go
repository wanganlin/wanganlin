// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Products is the golang structure for table products.
type Products struct {
	ProductId     uint   `json:"productId"     orm:"product_id"     ` //
	GoodsId       uint   `json:"goodsId"       orm:"goods_id"       ` //
	GoodsAttr     string `json:"goodsAttr"     orm:"goods_attr"     ` //
	ProductSn     string `json:"productSn"     orm:"product_sn"     ` //
	ProductNumber uint   `json:"productNumber" orm:"product_number" ` //
}
