// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Vote is the golang structure for table vote.
type Vote struct {
	VoteId    uint   `json:"voteId"    orm:"vote_id"    ` //
	VoteName  string `json:"voteName"  orm:"vote_name"  ` //
	StartTime uint   `json:"startTime" orm:"start_time" ` //
	EndTime   uint   `json:"endTime"   orm:"end_time"   ` //
	CanMulti  uint   `json:"canMulti"  orm:"can_multi"  ` //
	VoteCount uint   `json:"voteCount" orm:"vote_count" ` //
}
