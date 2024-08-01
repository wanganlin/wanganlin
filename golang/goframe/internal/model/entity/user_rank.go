// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// UserRank is the golang structure for table user_rank.
type UserRank struct {
	RankId      uint   `json:"rankId"      orm:"rank_id"      ` //
	RankName    string `json:"rankName"    orm:"rank_name"    ` //
	MinPoints   uint   `json:"minPoints"   orm:"min_points"   ` //
	MaxPoints   uint   `json:"maxPoints"   orm:"max_points"   ` //
	Discount    uint   `json:"discount"    orm:"discount"     ` //
	ShowPrice   uint   `json:"showPrice"   orm:"show_price"   ` //
	SpecialRank uint   `json:"specialRank" orm:"special_rank" ` //
}
