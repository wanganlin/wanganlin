// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// UserAddress is the golang structure for table user_address.
type UserAddress struct {
	AddressId    uint   `json:"addressId"    orm:"address_id"    ` //
	AddressName  string `json:"addressName"  orm:"address_name"  ` //
	UserId       uint   `json:"userId"       orm:"user_id"       ` //
	Consignee    string `json:"consignee"    orm:"consignee"     ` //
	Email        string `json:"email"        orm:"email"         ` //
	Country      int    `json:"country"      orm:"country"       ` //
	Province     int    `json:"province"     orm:"province"      ` //
	City         int    `json:"city"         orm:"city"          ` //
	District     int    `json:"district"     orm:"district"      ` //
	Address      string `json:"address"      orm:"address"       ` //
	Zipcode      string `json:"zipcode"      orm:"zipcode"       ` //
	Tel          string `json:"tel"          orm:"tel"           ` //
	Mobile       string `json:"mobile"       orm:"mobile"        ` //
	SignBuilding string `json:"signBuilding" orm:"sign_building" ` //
	BestTime     string `json:"bestTime"     orm:"best_time"     ` //
}
