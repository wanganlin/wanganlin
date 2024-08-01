// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Region is the golang structure for table region.
type Region struct {
	RegionId   uint   `json:"regionId"   orm:"region_id"   ` //
	ParentId   uint   `json:"parentId"   orm:"parent_id"   ` //
	RegionName string `json:"regionName" orm:"region_name" ` //
	RegionType int    `json:"regionType" orm:"region_type" ` //
	AgencyId   uint   `json:"agencyId"   orm:"agency_id"   ` //
}
