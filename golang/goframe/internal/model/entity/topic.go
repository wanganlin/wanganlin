// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Topic is the golang structure for table topic.
type Topic struct {
	TopicId     uint   `json:"topicId"     orm:"topic_id"    ` //
	Title       string `json:"title"       orm:"title"       ` //
	Intro       string `json:"intro"       orm:"intro"       ` //
	StartTime   int    `json:"startTime"   orm:"start_time"  ` //
	EndTime     int    `json:"endTime"     orm:"end_time"    ` //
	Data        string `json:"data"        orm:"data"        ` //
	Template    string `json:"template"    orm:"template"    ` //
	Css         string `json:"css"         orm:"css"         ` //
	TopicImg    string `json:"topicImg"    orm:"topic_img"   ` //
	TitlePic    string `json:"titlePic"    orm:"title_pic"   ` //
	BaseStyle   string `json:"baseStyle"   orm:"base_style"  ` //
	Htmls       string `json:"htmls"       orm:"htmls"       ` //
	Keywords    string `json:"keywords"    orm:"keywords"    ` //
	Description string `json:"description" orm:"description" ` //
}
