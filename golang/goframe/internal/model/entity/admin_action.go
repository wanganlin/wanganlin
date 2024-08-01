// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// AdminAction is the golang structure for table admin_action.
type AdminAction struct {
	ActionId   uint   `json:"actionId"   orm:"action_id"   ` //
	ParentId   uint   `json:"parentId"   orm:"parent_id"   ` //
	ActionCode string `json:"actionCode" orm:"action_code" ` //
	Relevance  string `json:"relevance"  orm:"relevance"   ` //
}
