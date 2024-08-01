// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Brand is the golang structure for table brand.
type Brand struct {
	BrandId   uint   `json:"brandId"   orm:"brand_id"   ` //
	BrandName string `json:"brandName" orm:"brand_name" ` //
	BrandLogo string `json:"brandLogo" orm:"brand_logo" ` //
	BrandDesc string `json:"brandDesc" orm:"brand_desc" ` //
	SiteUrl   string `json:"siteUrl"   orm:"site_url"   ` //
	SortOrder uint   `json:"sortOrder" orm:"sort_order" ` //
	IsShow    uint   `json:"isShow"    orm:"is_show"    ` //
}
