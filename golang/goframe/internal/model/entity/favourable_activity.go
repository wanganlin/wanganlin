// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// FavourableActivity is the golang structure for table favourable_activity.
type FavourableActivity struct {
	ActId       uint    `json:"actId"       orm:"act_id"        ` //
	ActName     string  `json:"actName"     orm:"act_name"      ` //
	StartTime   uint    `json:"startTime"   orm:"start_time"    ` //
	EndTime     uint    `json:"endTime"     orm:"end_time"      ` //
	UserRank    string  `json:"userRank"    orm:"user_rank"     ` //
	ActRange    uint    `json:"actRange"    orm:"act_range"     ` //
	ActRangeExt string  `json:"actRangeExt" orm:"act_range_ext" ` //
	MinAmount   float64 `json:"minAmount"   orm:"min_amount"    ` //
	MaxAmount   float64 `json:"maxAmount"   orm:"max_amount"    ` //
	ActType     uint    `json:"actType"     orm:"act_type"      ` //
	ActTypeExt  float64 `json:"actTypeExt"  orm:"act_type_ext"  ` //
	Gift        string  `json:"gift"        orm:"gift"          ` //
	SortOrder   uint    `json:"sortOrder"   orm:"sort_order"    ` //
}
