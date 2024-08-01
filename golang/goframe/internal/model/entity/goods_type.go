// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// GoodsType is the golang structure for table goods_type.
type GoodsType struct {
	CatId     uint   `json:"catId"     orm:"cat_id"     ` //
	CatName   string `json:"catName"   orm:"cat_name"   ` //
	Enabled   uint   `json:"enabled"   orm:"enabled"    ` //
	AttrGroup string `json:"attrGroup" orm:"attr_group" ` //
}
