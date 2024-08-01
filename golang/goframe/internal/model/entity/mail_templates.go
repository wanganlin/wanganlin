// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// MailTemplates is the golang structure for table mail_templates.
type MailTemplates struct {
	TemplateId      uint   `json:"templateId"      orm:"template_id"      ` //
	TemplateCode    string `json:"templateCode"    orm:"template_code"    ` //
	IsHtml          uint   `json:"isHtml"          orm:"is_html"          ` //
	TemplateSubject string `json:"templateSubject" orm:"template_subject" ` //
	TemplateContent string `json:"templateContent" orm:"template_content" ` //
	LastModify      uint   `json:"lastModify"      orm:"last_modify"      ` //
	LastSend        uint   `json:"lastSend"        orm:"last_send"        ` //
	Type            string `json:"type"            orm:"type"             ` //
}
