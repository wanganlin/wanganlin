// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// AffiliateLog is the golang structure for table affiliate_log.
type AffiliateLog struct {
	LogId        int     `json:"logId"        orm:"log_id"        ` //
	OrderId      int     `json:"orderId"      orm:"order_id"      ` //
	Time         int     `json:"time"         orm:"time"          ` //
	UserId       int     `json:"userId"       orm:"user_id"       ` //
	UserName     string  `json:"userName"     orm:"user_name"     ` //
	Money        float64 `json:"money"        orm:"money"         ` //
	Point        int     `json:"point"        orm:"point"         ` //
	SeparateType int     `json:"separateType" orm:"separate_type" ` //
}
