// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// AdminMessage is the golang structure for table admin_message.
type AdminMessage struct {
	MessageId  uint   `json:"messageId"  orm:"message_id"  ` //
	SenderId   uint   `json:"senderId"   orm:"sender_id"   ` //
	ReceiverId uint   `json:"receiverId" orm:"receiver_id" ` //
	SentTime   uint   `json:"sentTime"   orm:"sent_time"   ` //
	ReadTime   uint   `json:"readTime"   orm:"read_time"   ` //
	Readed     uint   `json:"readed"     orm:"readed"      ` //
	Deleted    uint   `json:"deleted"    orm:"deleted"     ` //
	Title      string `json:"title"      orm:"title"       ` //
	Message    string `json:"message"    orm:"message"     ` //
}
