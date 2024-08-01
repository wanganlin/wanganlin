// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// DeliveryOrder is the golang structure for table delivery_order.
type DeliveryOrder struct {
	DeliveryId   uint    `json:"deliveryId"   orm:"delivery_id"   ` //
	DeliverySn   string  `json:"deliverySn"   orm:"delivery_sn"   ` //
	OrderSn      string  `json:"orderSn"      orm:"order_sn"      ` //
	OrderId      uint    `json:"orderId"      orm:"order_id"      ` //
	InvoiceNo    string  `json:"invoiceNo"    orm:"invoice_no"    ` //
	AddTime      uint    `json:"addTime"      orm:"add_time"      ` //
	ShippingId   uint    `json:"shippingId"   orm:"shipping_id"   ` //
	ShippingName string  `json:"shippingName" orm:"shipping_name" ` //
	UserId       uint    `json:"userId"       orm:"user_id"       ` //
	ActionUser   string  `json:"actionUser"   orm:"action_user"   ` //
	Consignee    string  `json:"consignee"    orm:"consignee"     ` //
	Address      string  `json:"address"      orm:"address"       ` //
	Country      uint    `json:"country"      orm:"country"       ` //
	Province     uint    `json:"province"     orm:"province"      ` //
	City         uint    `json:"city"         orm:"city"          ` //
	District     uint    `json:"district"     orm:"district"      ` //
	SignBuilding string  `json:"signBuilding" orm:"sign_building" ` //
	Email        string  `json:"email"        orm:"email"         ` //
	Zipcode      string  `json:"zipcode"      orm:"zipcode"       ` //
	Tel          string  `json:"tel"          orm:"tel"           ` //
	Mobile       string  `json:"mobile"       orm:"mobile"        ` //
	BestTime     string  `json:"bestTime"     orm:"best_time"     ` //
	Postscript   string  `json:"postscript"   orm:"postscript"    ` //
	HowOos       string  `json:"howOos"       orm:"how_oos"       ` //
	InsureFee    float64 `json:"insureFee"    orm:"insure_fee"    ` //
	ShippingFee  float64 `json:"shippingFee"  orm:"shipping_fee"  ` //
	UpdateTime   uint    `json:"updateTime"   orm:"update_time"   ` //
	SuppliersId  int     `json:"suppliersId"  orm:"suppliers_id"  ` //
	Status       uint    `json:"status"       orm:"status"        ` //
	AgencyId     uint    `json:"agencyId"     orm:"agency_id"     ` //
}
