// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// SnatchLog is the golang structure for table snatch_log.
type SnatchLog struct {
	LogId    uint    `json:"logId"    orm:"log_id"    ` //
	SnatchId uint    `json:"snatchId" orm:"snatch_id" ` //
	UserId   uint    `json:"userId"   orm:"user_id"   ` //
	BidPrice float64 `json:"bidPrice" orm:"bid_price" ` //
	BidTime  uint    `json:"bidTime"  orm:"bid_time"  ` //
}
