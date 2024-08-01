// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// FriendLink is the golang structure for table friend_link.
type FriendLink struct {
	LinkId    uint   `json:"linkId"    orm:"link_id"    ` //
	LinkName  string `json:"linkName"  orm:"link_name"  ` //
	LinkUrl   string `json:"linkUrl"   orm:"link_url"   ` //
	LinkLogo  string `json:"linkLogo"  orm:"link_logo"  ` //
	ShowOrder uint   `json:"showOrder" orm:"show_order" ` //
}
