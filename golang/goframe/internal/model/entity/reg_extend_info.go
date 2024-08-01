// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// RegExtendInfo is the golang structure for table reg_extend_info.
type RegExtendInfo struct {
	Id         uint   `json:"id"         orm:"Id"           ` //
	UserId     uint   `json:"userId"     orm:"user_id"      ` //
	RegFieldId uint   `json:"regFieldId" orm:"reg_field_id" ` //
	Content    string `json:"content"    orm:"content"      ` //
}
