// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Role is the golang structure for table role.
type Role struct {
	RoleId       uint   `json:"roleId"       orm:"role_id"       ` //
	RoleName     string `json:"roleName"     orm:"role_name"     ` //
	ActionList   string `json:"actionList"   orm:"action_list"   ` //
	RoleDescribe string `json:"roleDescribe" orm:"role_describe" ` //
}
