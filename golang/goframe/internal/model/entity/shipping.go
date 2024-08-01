// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Shipping is the golang structure for table shipping.
type Shipping struct {
	ShippingId    uint   `json:"shippingId"    orm:"shipping_id"    ` //
	ShippingCode  string `json:"shippingCode"  orm:"shipping_code"  ` //
	ShippingName  string `json:"shippingName"  orm:"shipping_name"  ` //
	ShippingDesc  string `json:"shippingDesc"  orm:"shipping_desc"  ` //
	Insure        string `json:"insure"        orm:"insure"         ` //
	SupportCod    uint   `json:"supportCod"    orm:"support_cod"    ` //
	Enabled       uint   `json:"enabled"       orm:"enabled"        ` //
	ShippingPrint string `json:"shippingPrint" orm:"shipping_print" ` //
	PrintBg       string `json:"printBg"       orm:"print_bg"       ` //
	ConfigLable   string `json:"configLable"   orm:"config_lable"   ` //
	PrintModel    int    `json:"printModel"    orm:"print_model"    ` //
	ShippingOrder uint   `json:"shippingOrder" orm:"shipping_order" ` //
}
