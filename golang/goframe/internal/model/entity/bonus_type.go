// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// BonusType is the golang structure for table bonus_type.
type BonusType struct {
	TypeId         uint    `json:"typeId"         orm:"type_id"          ` //
	TypeName       string  `json:"typeName"       orm:"type_name"        ` //
	TypeMoney      float64 `json:"typeMoney"      orm:"type_money"       ` //
	SendType       uint    `json:"sendType"       orm:"send_type"        ` //
	MinAmount      float64 `json:"minAmount"      orm:"min_amount"       ` //
	MaxAmount      float64 `json:"maxAmount"      orm:"max_amount"       ` //
	SendStartDate  int     `json:"sendStartDate"  orm:"send_start_date"  ` //
	SendEndDate    int     `json:"sendEndDate"    orm:"send_end_date"    ` //
	UseStartDate   int     `json:"useStartDate"   orm:"use_start_date"   ` //
	UseEndDate     int     `json:"useEndDate"     orm:"use_end_date"     ` //
	MinGoodsAmount float64 `json:"minGoodsAmount" orm:"min_goods_amount" ` //
}
