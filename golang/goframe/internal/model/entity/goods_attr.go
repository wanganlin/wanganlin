// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// GoodsAttr is the golang structure for table goods_attr.
type GoodsAttr struct {
	GoodsAttrId uint   `json:"goodsAttrId" orm:"goods_attr_id" ` //
	GoodsId     uint   `json:"goodsId"     orm:"goods_id"      ` //
	AttrId      uint   `json:"attrId"      orm:"attr_id"       ` //
	AttrValue   string `json:"attrValue"   orm:"attr_value"    ` //
	AttrPrice   string `json:"attrPrice"   orm:"attr_price"    ` //
}
