// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// EmailSendlist is the golang structure for table email_sendlist.
type EmailSendlist struct {
	Id           int    `json:"id"           orm:"id"            ` //
	Email        string `json:"email"        orm:"email"         ` //
	TemplateId   int    `json:"templateId"   orm:"template_id"   ` //
	EmailContent string `json:"emailContent" orm:"email_content" ` //
	Error        int    `json:"error"        orm:"error"         ` //
	Pri          int    `json:"pri"          orm:"pri"           ` //
	LastSend     int    `json:"lastSend"     orm:"last_send"     ` //
}
