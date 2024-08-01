// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// AuctionLog is the golang structure for table auction_log.
type AuctionLog struct {
	LogId    uint    `json:"logId"    orm:"log_id"    ` //
	ActId    uint    `json:"actId"    orm:"act_id"    ` //
	BidUser  uint    `json:"bidUser"  orm:"bid_user"  ` //
	BidPrice float64 `json:"bidPrice" orm:"bid_price" ` //
	BidTime  uint    `json:"bidTime"  orm:"bid_time"  ` //
}
