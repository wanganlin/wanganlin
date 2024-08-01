// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Comment is the golang structure for table comment.
type Comment struct {
	CommentId   uint   `json:"commentId"   orm:"comment_id"   ` //
	CommentType uint   `json:"commentType" orm:"comment_type" ` //
	IdValue     uint   `json:"idValue"     orm:"id_value"     ` //
	Email       string `json:"email"       orm:"email"        ` //
	UserName    string `json:"userName"    orm:"user_name"    ` //
	Content     string `json:"content"     orm:"content"      ` //
	CommentRank uint   `json:"commentRank" orm:"comment_rank" ` //
	AddTime     uint   `json:"addTime"     orm:"add_time"     ` //
	IpAddress   string `json:"ipAddress"   orm:"ip_address"   ` //
	Status      uint   `json:"status"      orm:"status"       ` //
	ParentId    uint   `json:"parentId"    orm:"parent_id"    ` //
	UserId      uint   `json:"userId"      orm:"user_id"      ` //
}
