// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Nav is the golang structure for table nav.
type Nav struct {
	Id        int    `json:"id"        orm:"id"        ` //
	Ctype     string `json:"ctype"     orm:"ctype"     ` //
	Cid       uint   `json:"cid"       orm:"cid"       ` //
	Name      string `json:"name"      orm:"name"      ` //
	Ifshow    int    `json:"ifshow"    orm:"ifshow"    ` //
	Vieworder int    `json:"vieworder" orm:"vieworder" ` //
	Opennew   int    `json:"opennew"   orm:"opennew"   ` //
	Url       string `json:"url"       orm:"url"       ` //
	Type      string `json:"type"      orm:"type"      ` //
}
