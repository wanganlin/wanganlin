// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// PayLog is the golang structure for table pay_log.
type PayLog struct {
	LogId       uint    `json:"logId"       orm:"log_id"       ` //
	OrderId     uint    `json:"orderId"     orm:"order_id"     ` //
	OrderAmount float64 `json:"orderAmount" orm:"order_amount" ` //
	OrderType   uint    `json:"orderType"   orm:"order_type"   ` //
	IsPaid      uint    `json:"isPaid"      orm:"is_paid"      ` //
}
