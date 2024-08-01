// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Category is the golang structure for table category.
type Category struct {
	CatId        uint   `json:"catId"        orm:"cat_id"        ` //
	CatName      string `json:"catName"      orm:"cat_name"      ` //
	Keywords     string `json:"keywords"     orm:"keywords"      ` //
	CatDesc      string `json:"catDesc"      orm:"cat_desc"      ` //
	ParentId     uint   `json:"parentId"     orm:"parent_id"     ` //
	SortOrder    uint   `json:"sortOrder"    orm:"sort_order"    ` //
	TemplateFile string `json:"templateFile" orm:"template_file" ` //
	MeasureUnit  string `json:"measureUnit"  orm:"measure_unit"  ` //
	ShowInNav    int    `json:"showInNav"    orm:"show_in_nav"   ` //
	Style        string `json:"style"        orm:"style"         ` //
	IsShow       uint   `json:"isShow"       orm:"is_show"       ` //
	Grade        int    `json:"grade"        orm:"grade"         ` //
	FilterAttr   string `json:"filterAttr"   orm:"filter_attr"   ` //
}
