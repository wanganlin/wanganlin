// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Payment is the golang structure for table payment.
type Payment struct {
	PayId     uint   `json:"payId"     orm:"pay_id"     ` //
	PayCode   string `json:"payCode"   orm:"pay_code"   ` //
	PayName   string `json:"payName"   orm:"pay_name"   ` //
	PayFee    string `json:"payFee"    orm:"pay_fee"    ` //
	PayDesc   string `json:"payDesc"   orm:"pay_desc"   ` //
	PayOrder  uint   `json:"payOrder"  orm:"pay_order"  ` //
	PayConfig string `json:"payConfig" orm:"pay_config" ` //
	Enabled   uint   `json:"enabled"   orm:"enabled"    ` //
	IsCod     uint   `json:"isCod"     orm:"is_cod"     ` //
	IsOnline  uint   `json:"isOnline"  orm:"is_online"  ` //
}
