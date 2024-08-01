// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Ad is the golang structure for table ad.
type Ad struct {
	AdId       uint   `json:"adId"       orm:"ad_id"       ` //
	PositionId uint   `json:"positionId" orm:"position_id" ` //
	MediaType  uint   `json:"mediaType"  orm:"media_type"  ` //
	AdName     string `json:"adName"     orm:"ad_name"     ` //
	AdLink     string `json:"adLink"     orm:"ad_link"     ` //
	AdCode     string `json:"adCode"     orm:"ad_code"     ` //
	StartTime  int    `json:"startTime"  orm:"start_time"  ` //
	EndTime    int    `json:"endTime"    orm:"end_time"    ` //
	LinkMan    string `json:"linkMan"    orm:"link_man"    ` //
	LinkEmail  string `json:"linkEmail"  orm:"link_email"  ` //
	LinkPhone  string `json:"linkPhone"  orm:"link_phone"  ` //
	ClickCount uint   `json:"clickCount" orm:"click_count" ` //
	Enabled    uint   `json:"enabled"    orm:"enabled"     ` //
}
