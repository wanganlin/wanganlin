// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// AccountLog is the golang structure for table account_log.
type AccountLog struct {
	LogId       uint    `json:"logId"       orm:"log_id"       ` //
	UserId      uint    `json:"userId"      orm:"user_id"      ` //
	UserMoney   float64 `json:"userMoney"   orm:"user_money"   ` //
	FrozenMoney float64 `json:"frozenMoney" orm:"frozen_money" ` //
	RankPoints  int     `json:"rankPoints"  orm:"rank_points"  ` //
	PayPoints   int     `json:"payPoints"   orm:"pay_points"   ` //
	ChangeTime  uint    `json:"changeTime"  orm:"change_time"  ` //
	ChangeDesc  string  `json:"changeDesc"  orm:"change_desc"  ` //
	ChangeType  uint    `json:"changeType"  orm:"change_type"  ` //
}
