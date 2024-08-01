// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// AdminLog is the golang structure for table admin_log.
type AdminLog struct {
	LogId     uint   `json:"logId"     orm:"log_id"     ` //
	LogTime   uint   `json:"logTime"   orm:"log_time"   ` //
	UserId    uint   `json:"userId"    orm:"user_id"    ` //
	LogInfo   string `json:"logInfo"   orm:"log_info"   ` //
	IpAddress string `json:"ipAddress" orm:"ip_address" ` //
}
