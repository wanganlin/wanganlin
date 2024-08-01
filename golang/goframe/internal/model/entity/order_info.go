// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// OrderInfo is the golang structure for table order_info.
type OrderInfo struct {
	OrderId        uint    `json:"orderId"        orm:"order_id"        ` //
	OrderSn        string  `json:"orderSn"        orm:"order_sn"        ` //
	UserId         uint    `json:"userId"         orm:"user_id"         ` //
	OrderStatus    uint    `json:"orderStatus"    orm:"order_status"    ` //
	ShippingStatus uint    `json:"shippingStatus" orm:"shipping_status" ` //
	PayStatus      uint    `json:"payStatus"      orm:"pay_status"      ` //
	Consignee      string  `json:"consignee"      orm:"consignee"       ` //
	Country        uint    `json:"country"        orm:"country"         ` //
	Province       uint    `json:"province"       orm:"province"        ` //
	City           uint    `json:"city"           orm:"city"            ` //
	District       uint    `json:"district"       orm:"district"        ` //
	Address        string  `json:"address"        orm:"address"         ` //
	Zipcode        string  `json:"zipcode"        orm:"zipcode"         ` //
	Tel            string  `json:"tel"            orm:"tel"             ` //
	Mobile         string  `json:"mobile"         orm:"mobile"          ` //
	Email          string  `json:"email"          orm:"email"           ` //
	BestTime       string  `json:"bestTime"       orm:"best_time"       ` //
	SignBuilding   string  `json:"signBuilding"   orm:"sign_building"   ` //
	Postscript     string  `json:"postscript"     orm:"postscript"      ` //
	ShippingId     int     `json:"shippingId"     orm:"shipping_id"     ` //
	ShippingName   string  `json:"shippingName"   orm:"shipping_name"   ` //
	PayId          int     `json:"payId"          orm:"pay_id"          ` //
	PayName        string  `json:"payName"        orm:"pay_name"        ` //
	HowOos         string  `json:"howOos"         orm:"how_oos"         ` //
	HowSurplus     string  `json:"howSurplus"     orm:"how_surplus"     ` //
	PackName       string  `json:"packName"       orm:"pack_name"       ` //
	CardName       string  `json:"cardName"       orm:"card_name"       ` //
	CardMessage    string  `json:"cardMessage"    orm:"card_message"    ` //
	InvPayee       string  `json:"invPayee"       orm:"inv_payee"       ` //
	InvContent     string  `json:"invContent"     orm:"inv_content"     ` //
	GoodsAmount    float64 `json:"goodsAmount"    orm:"goods_amount"    ` //
	ShippingFee    float64 `json:"shippingFee"    orm:"shipping_fee"    ` //
	InsureFee      float64 `json:"insureFee"      orm:"insure_fee"      ` //
	PayFee         float64 `json:"payFee"         orm:"pay_fee"         ` //
	PackFee        float64 `json:"packFee"        orm:"pack_fee"        ` //
	CardFee        float64 `json:"cardFee"        orm:"card_fee"        ` //
	MoneyPaid      float64 `json:"moneyPaid"      orm:"money_paid"      ` //
	Surplus        float64 `json:"surplus"        orm:"surplus"         ` //
	Integral       uint    `json:"integral"       orm:"integral"        ` //
	IntegralMoney  float64 `json:"integralMoney"  orm:"integral_money"  ` //
	Bonus          float64 `json:"bonus"          orm:"bonus"           ` //
	OrderAmount    float64 `json:"orderAmount"    orm:"order_amount"    ` //
	FromAd         int     `json:"fromAd"         orm:"from_ad"         ` //
	Referer        string  `json:"referer"        orm:"referer"         ` //
	AddTime        uint    `json:"addTime"        orm:"add_time"        ` //
	ConfirmTime    uint    `json:"confirmTime"    orm:"confirm_time"    ` //
	PayTime        uint    `json:"payTime"        orm:"pay_time"        ` //
	ShippingTime   uint    `json:"shippingTime"   orm:"shipping_time"   ` //
	PackId         uint    `json:"packId"         orm:"pack_id"         ` //
	CardId         uint    `json:"cardId"         orm:"card_id"         ` //
	BonusId        uint    `json:"bonusId"        orm:"bonus_id"        ` //
	InvoiceNo      string  `json:"invoiceNo"      orm:"invoice_no"      ` //
	ExtensionCode  string  `json:"extensionCode"  orm:"extension_code"  ` //
	ExtensionId    uint    `json:"extensionId"    orm:"extension_id"    ` //
	ToBuyer        string  `json:"toBuyer"        orm:"to_buyer"        ` //
	PayNote        string  `json:"payNote"        orm:"pay_note"        ` //
	AgencyId       uint    `json:"agencyId"       orm:"agency_id"       ` //
	InvType        string  `json:"invType"        orm:"inv_type"        ` //
	Tax            float64 `json:"tax"            orm:"tax"             ` //
	IsSeparate     int     `json:"isSeparate"     orm:"is_separate"     ` //
	ParentId       uint    `json:"parentId"       orm:"parent_id"       ` //
	Discount       float64 `json:"discount"       orm:"discount"        ` //
}
