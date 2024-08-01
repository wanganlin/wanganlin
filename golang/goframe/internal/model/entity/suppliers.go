// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Suppliers is the golang structure for table suppliers.
type Suppliers struct {
	SuppliersId   uint   `json:"suppliersId"   orm:"suppliers_id"   ` //
	SuppliersName string `json:"suppliersName" orm:"suppliers_name" ` //
	SuppliersDesc string `json:"suppliersDesc" orm:"suppliers_desc" ` //
	IsCheck       uint   `json:"isCheck"       orm:"is_check"       ` //
}
