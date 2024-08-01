// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Stats is the golang structure for table stats.
type Stats struct {
	AccessTime    uint   `json:"accessTime"    orm:"access_time"    ` //
	IpAddress     string `json:"ipAddress"     orm:"ip_address"     ` //
	VisitTimes    uint   `json:"visitTimes"    orm:"visit_times"    ` //
	Browser       string `json:"browser"       orm:"browser"        ` //
	System        string `json:"system"        orm:"system"         ` //
	Language      string `json:"language"      orm:"language"       ` //
	Area          string `json:"area"          orm:"area"           ` //
	RefererDomain string `json:"refererDomain" orm:"referer_domain" ` //
	RefererPath   string `json:"refererPath"   orm:"referer_path"   ` //
	AccessUrl     string `json:"accessUrl"     orm:"access_url"     ` //
}
