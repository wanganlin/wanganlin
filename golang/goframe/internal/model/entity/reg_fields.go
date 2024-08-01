// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// RegFields is the golang structure for table reg_fields.
type RegFields struct {
	Id           uint   `json:"id"           orm:"id"             ` //
	RegFieldName string `json:"regFieldName" orm:"reg_field_name" ` //
	DisOrder     uint   `json:"disOrder"     orm:"dis_order"      ` //
	Display      uint   `json:"display"      orm:"display"        ` //
	Type         uint   `json:"type"         orm:"type"           ` //
	IsNeed       uint   `json:"isNeed"       orm:"is_need"        ` //
}
