// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// ArticleCat is the golang structure for table article_cat.
type ArticleCat struct {
	CatId     int    `json:"catId"     orm:"cat_id"      ` //
	CatName   string `json:"catName"   orm:"cat_name"    ` //
	CatType   uint   `json:"catType"   orm:"cat_type"    ` //
	Keywords  string `json:"keywords"  orm:"keywords"    ` //
	CatDesc   string `json:"catDesc"   orm:"cat_desc"    ` //
	SortOrder uint   `json:"sortOrder" orm:"sort_order"  ` //
	ShowInNav uint   `json:"showInNav" orm:"show_in_nav" ` //
	ParentId  uint   `json:"parentId"  orm:"parent_id"   ` //
}
