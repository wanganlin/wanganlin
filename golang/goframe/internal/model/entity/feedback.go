// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Feedback is the golang structure for table feedback.
type Feedback struct {
	MsgId      uint   `json:"msgId"      orm:"msg_id"      ` //
	ParentId   uint   `json:"parentId"   orm:"parent_id"   ` //
	UserId     uint   `json:"userId"     orm:"user_id"     ` //
	UserName   string `json:"userName"   orm:"user_name"   ` //
	UserEmail  string `json:"userEmail"  orm:"user_email"  ` //
	MsgTitle   string `json:"msgTitle"   orm:"msg_title"   ` //
	MsgType    uint   `json:"msgType"    orm:"msg_type"    ` //
	MsgStatus  uint   `json:"msgStatus"  orm:"msg_status"  ` //
	MsgContent string `json:"msgContent" orm:"msg_content" ` //
	MsgTime    uint   `json:"msgTime"    orm:"msg_time"    ` //
	MessageImg string `json:"messageImg" orm:"message_img" ` //
	OrderId    uint   `json:"orderId"    orm:"order_id"    ` //
	MsgArea    uint   `json:"msgArea"    orm:"msg_area"    ` //
}
