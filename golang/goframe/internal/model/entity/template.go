// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Template is the golang structure for table template.
type Template struct {
	Filename  string `json:"filename"  orm:"filename"   ` //
	Region    string `json:"region"    orm:"region"     ` //
	Library   string `json:"library"   orm:"library"    ` //
	SortOrder uint   `json:"sortOrder" orm:"sort_order" ` //
	Id        uint   `json:"id"        orm:"id"         ` //
	Number    uint   `json:"number"    orm:"number"     ` //
	Type      uint   `json:"type"      orm:"type"       ` //
	Theme     string `json:"theme"     orm:"theme"      ` //
	Remarks   string `json:"remarks"   orm:"remarks"    ` //
}
