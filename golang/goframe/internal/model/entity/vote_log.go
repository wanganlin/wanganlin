// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// VoteLog is the golang structure for table vote_log.
type VoteLog struct {
	LogId     uint   `json:"logId"     orm:"log_id"     ` //
	VoteId    uint   `json:"voteId"    orm:"vote_id"    ` //
	IpAddress string `json:"ipAddress" orm:"ip_address" ` //
	VoteTime  uint   `json:"voteTime"  orm:"vote_time"  ` //
}
