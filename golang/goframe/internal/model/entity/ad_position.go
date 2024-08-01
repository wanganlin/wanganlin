// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// AdPosition is the golang structure for table ad_position.
type AdPosition struct {
	PositionId    uint   `json:"positionId"    orm:"position_id"    ` //
	PositionName  string `json:"positionName"  orm:"position_name"  ` //
	AdWidth       uint   `json:"adWidth"       orm:"ad_width"       ` //
	AdHeight      uint   `json:"adHeight"      orm:"ad_height"      ` //
	PositionDesc  string `json:"positionDesc"  orm:"position_desc"  ` //
	PositionStyle string `json:"positionStyle" orm:"position_style" ` //
}
