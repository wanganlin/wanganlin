// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// UserAccount is the golang structure for table user_account.
type UserAccount struct {
	Id          uint    `json:"id"          orm:"id"           ` //
	UserId      uint    `json:"userId"      orm:"user_id"      ` //
	AdminUser   string  `json:"adminUser"   orm:"admin_user"   ` //
	Amount      float64 `json:"amount"      orm:"amount"       ` //
	AddTime     int     `json:"addTime"     orm:"add_time"     ` //
	PaidTime    int     `json:"paidTime"    orm:"paid_time"    ` //
	AdminNote   string  `json:"adminNote"   orm:"admin_note"   ` //
	UserNote    string  `json:"userNote"    orm:"user_note"    ` //
	ProcessType int     `json:"processType" orm:"process_type" ` //
	Payment     string  `json:"payment"     orm:"payment"      ` //
	IsPaid      int     `json:"isPaid"      orm:"is_paid"      ` //
}
