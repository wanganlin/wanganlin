// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Pack is the golang structure for table pack.
type Pack struct {
	PackId    uint    `json:"packId"    orm:"pack_id"    ` //
	PackName  string  `json:"packName"  orm:"pack_name"  ` //
	PackImg   string  `json:"packImg"   orm:"pack_img"   ` //
	PackFee   float64 `json:"packFee"   orm:"pack_fee"   ` //
	FreeMoney uint    `json:"freeMoney" orm:"free_money" ` //
	PackDesc  string  `json:"packDesc"  orm:"pack_desc"  ` //
}
