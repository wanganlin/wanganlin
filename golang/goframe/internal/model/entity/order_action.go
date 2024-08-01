// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// OrderAction is the golang structure for table order_action.
type OrderAction struct {
	ActionId       uint   `json:"actionId"       orm:"action_id"       ` //
	OrderId        uint   `json:"orderId"        orm:"order_id"        ` //
	ActionUser     string `json:"actionUser"     orm:"action_user"     ` //
	OrderStatus    uint   `json:"orderStatus"    orm:"order_status"    ` //
	ShippingStatus uint   `json:"shippingStatus" orm:"shipping_status" ` //
	PayStatus      uint   `json:"payStatus"      orm:"pay_status"      ` //
	ActionPlace    uint   `json:"actionPlace"    orm:"action_place"    ` //
	ActionNote     string `json:"actionNote"     orm:"action_note"     ` //
	LogTime        uint   `json:"logTime"        orm:"log_time"        ` //
}
