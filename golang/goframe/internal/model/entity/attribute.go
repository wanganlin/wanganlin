// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Attribute is the golang structure for table attribute.
type Attribute struct {
	AttrId        uint   `json:"attrId"        orm:"attr_id"         ` //
	CatId         uint   `json:"catId"         orm:"cat_id"          ` //
	AttrName      string `json:"attrName"      orm:"attr_name"       ` //
	AttrInputType uint   `json:"attrInputType" orm:"attr_input_type" ` //
	AttrType      uint   `json:"attrType"      orm:"attr_type"       ` //
	AttrValues    string `json:"attrValues"    orm:"attr_values"     ` //
	AttrIndex     uint   `json:"attrIndex"     orm:"attr_index"      ` //
	SortOrder     uint   `json:"sortOrder"     orm:"sort_order"      ` //
	IsLinked      uint   `json:"isLinked"      orm:"is_linked"       ` //
	AttrGroup     uint   `json:"attrGroup"     orm:"attr_group"      ` //
}
