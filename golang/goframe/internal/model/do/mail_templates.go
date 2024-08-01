// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// MailTemplates is the golang structure of table mail_templates for DAO operations like Where/Data.
type MailTemplates struct {
	g.Meta          `orm:"table:mail_templates, do:true"`
	TemplateId      interface{} //
	TemplateCode    interface{} //
	IsHtml          interface{} //
	TemplateSubject interface{} //
	TemplateContent interface{} //
	LastModify      interface{} //
	LastSend        interface{} //
	Type            interface{} //
}
