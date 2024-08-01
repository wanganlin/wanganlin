// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// Comment is the golang structure of table comment for DAO operations like Where/Data.
type Comment struct {
	g.Meta      `orm:"table:comment, do:true"`
	CommentId   interface{} //
	CommentType interface{} //
	IdValue     interface{} //
	Email       interface{} //
	UserName    interface{} //
	Content     interface{} //
	CommentRank interface{} //
	AddTime     interface{} //
	IpAddress   interface{} //
	Status      interface{} //
	ParentId    interface{} //
	UserId      interface{} //
}
