// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// AdCustom is the golang structure for table ad_custom.
type AdCustom struct {
	AdId     uint   `json:"adId"     orm:"ad_id"     ` //
	AdType   uint   `json:"adType"   orm:"ad_type"   ` //
	AdName   string `json:"adName"   orm:"ad_name"   ` //
	AddTime  uint   `json:"addTime"  orm:"add_time"  ` //
	Content  string `json:"content"  orm:"content"   ` //
	Url      string `json:"url"      orm:"url"       ` //
	AdStatus uint   `json:"adStatus" orm:"ad_status" ` //
}
