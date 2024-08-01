// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// VoteOption is the golang structure for table vote_option.
type VoteOption struct {
	OptionId    uint   `json:"optionId"    orm:"option_id"    ` //
	VoteId      uint   `json:"voteId"      orm:"vote_id"      ` //
	OptionName  string `json:"optionName"  orm:"option_name"  ` //
	OptionCount uint   `json:"optionCount" orm:"option_count" ` //
	OptionOrder uint   `json:"optionOrder" orm:"option_order" ` //
}
