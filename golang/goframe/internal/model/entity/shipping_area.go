// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// ShippingArea is the golang structure for table shipping_area.
type ShippingArea struct {
	ShippingAreaId   uint   `json:"shippingAreaId"   orm:"shipping_area_id"   ` //
	ShippingAreaName string `json:"shippingAreaName" orm:"shipping_area_name" ` //
	ShippingId       uint   `json:"shippingId"       orm:"shipping_id"        ` //
	Configure        string `json:"configure"        orm:"configure"          ` //
}
