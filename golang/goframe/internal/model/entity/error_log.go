// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// ErrorLog is the golang structure for table error_log.
type ErrorLog struct {
	Id   int    `json:"id"   orm:"id"   ` //
	Info string `json:"info" orm:"info" ` //
	File string `json:"file" orm:"file" ` //
	Time int    `json:"time" orm:"time" ` //
}
