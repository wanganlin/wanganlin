// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// BackGoods is the golang structure for table back_goods.
type BackGoods struct {
	RecId      uint   `json:"recId"      orm:"rec_id"      ` //
	BackId     uint   `json:"backId"     orm:"back_id"     ` //
	GoodsId    uint   `json:"goodsId"    orm:"goods_id"    ` //
	ProductId  uint   `json:"productId"  orm:"product_id"  ` //
	ProductSn  string `json:"productSn"  orm:"product_sn"  ` //
	GoodsName  string `json:"goodsName"  orm:"goods_name"  ` //
	BrandName  string `json:"brandName"  orm:"brand_name"  ` //
	GoodsSn    string `json:"goodsSn"    orm:"goods_sn"    ` //
	IsReal     uint   `json:"isReal"     orm:"is_real"     ` //
	SendNumber uint   `json:"sendNumber" orm:"send_number" ` //
	GoodsAttr  string `json:"goodsAttr"  orm:"goods_attr"  ` //
}
