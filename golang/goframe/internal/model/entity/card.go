// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Card is the golang structure for table card.
type Card struct {
	CardId    uint    `json:"cardId"    orm:"card_id"    ` //
	CardName  string  `json:"cardName"  orm:"card_name"  ` //
	CardImg   string  `json:"cardImg"   orm:"card_img"   ` //
	CardFee   float64 `json:"cardFee"   orm:"card_fee"   ` //
	FreeMoney float64 `json:"freeMoney" orm:"free_money" ` //
	CardDesc  string  `json:"cardDesc"  orm:"card_desc"  ` //
}
