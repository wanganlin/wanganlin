// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// ShopConfig is the golang structure for table shop_config.
type ShopConfig struct {
	Id         uint   `json:"id"         orm:"id"          ` //
	ParentId   uint   `json:"parentId"   orm:"parent_id"   ` //
	Code       string `json:"code"       orm:"code"        ` //
	Type       string `json:"type"       orm:"type"        ` //
	StoreRange string `json:"storeRange" orm:"store_range" ` //
	StoreDir   string `json:"storeDir"   orm:"store_dir"   ` //
	Value      string `json:"value"      orm:"value"       ` //
	SortOrder  uint   `json:"sortOrder"  orm:"sort_order"  ` //
}
