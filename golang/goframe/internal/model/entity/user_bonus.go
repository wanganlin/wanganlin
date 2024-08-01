// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// UserBonus is the golang structure for table user_bonus.
type UserBonus struct {
	BonusId     uint   `json:"bonusId"     orm:"bonus_id"      ` //
	BonusTypeId uint   `json:"bonusTypeId" orm:"bonus_type_id" ` //
	BonusSn     uint64 `json:"bonusSn"     orm:"bonus_sn"      ` //
	UserId      uint   `json:"userId"      orm:"user_id"       ` //
	UsedTime    uint   `json:"usedTime"    orm:"used_time"     ` //
	OrderId     uint   `json:"orderId"     orm:"order_id"      ` //
	Emailed     uint   `json:"emailed"     orm:"emailed"       ` //
}
