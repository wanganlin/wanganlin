// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// GoodsActivity is the golang structure for table goods_activity.
type GoodsActivity struct {
	ActId      uint   `json:"actId"      orm:"act_id"      ` //
	ActName    string `json:"actName"    orm:"act_name"    ` //
	ActDesc    string `json:"actDesc"    orm:"act_desc"    ` //
	ActType    uint   `json:"actType"    orm:"act_type"    ` //
	GoodsId    uint   `json:"goodsId"    orm:"goods_id"    ` //
	ProductId  uint   `json:"productId"  orm:"product_id"  ` //
	GoodsName  string `json:"goodsName"  orm:"goods_name"  ` //
	StartTime  uint   `json:"startTime"  orm:"start_time"  ` //
	EndTime    uint   `json:"endTime"    orm:"end_time"    ` //
	IsFinished uint   `json:"isFinished" orm:"is_finished" ` //
	ExtInfo    string `json:"extInfo"    orm:"ext_info"    ` //
}
