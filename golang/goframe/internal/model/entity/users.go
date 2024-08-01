// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

import (
	"github.com/gogf/gf/v2/os/gtime"
)

// Users is the golang structure for table users.
type Users struct {
	UserId         uint        `json:"userId"         orm:"user_id"         ` //
	Email          string      `json:"email"          orm:"email"           ` //
	UserName       string      `json:"userName"       orm:"user_name"       ` //
	Password       string      `json:"password"       orm:"password"        ` //
	Question       string      `json:"question"       orm:"question"        ` //
	Answer         string      `json:"answer"         orm:"answer"          ` //
	Sex            uint        `json:"sex"            orm:"sex"             ` //
	Birthday       *gtime.Time `json:"birthday"       orm:"birthday"        ` //
	UserMoney      float64     `json:"userMoney"      orm:"user_money"      ` //
	FrozenMoney    float64     `json:"frozenMoney"    orm:"frozen_money"    ` //
	PayPoints      uint        `json:"payPoints"      orm:"pay_points"      ` //
	RankPoints     uint        `json:"rankPoints"     orm:"rank_points"     ` //
	AddressId      uint        `json:"addressId"      orm:"address_id"      ` //
	RegTime        uint        `json:"regTime"        orm:"reg_time"        ` //
	LastLogin      uint        `json:"lastLogin"      orm:"last_login"      ` //
	LastTime       *gtime.Time `json:"lastTime"       orm:"last_time"       ` //
	LastIp         string      `json:"lastIp"         orm:"last_ip"         ` //
	VisitCount     uint        `json:"visitCount"     orm:"visit_count"     ` //
	UserRank       uint        `json:"userRank"       orm:"user_rank"       ` //
	IsSpecial      uint        `json:"isSpecial"      orm:"is_special"      ` //
	EcSalt         string      `json:"ecSalt"         orm:"ec_salt"         ` //
	Salt           string      `json:"salt"           orm:"salt"            ` //
	ParentId       int         `json:"parentId"       orm:"parent_id"       ` //
	Flag           uint        `json:"flag"           orm:"flag"            ` //
	Alias          string      `json:"alias"          orm:"alias"           ` //
	Msn            string      `json:"msn"            orm:"msn"             ` //
	Qq             string      `json:"qq"             orm:"qq"              ` //
	OfficePhone    string      `json:"officePhone"    orm:"office_phone"    ` //
	HomePhone      string      `json:"homePhone"      orm:"home_phone"      ` //
	MobilePhone    string      `json:"mobilePhone"    orm:"mobile_phone"    ` //
	IsValidated    uint        `json:"isValidated"    orm:"is_validated"    ` //
	CreditLine     float64     `json:"creditLine"     orm:"credit_line"     ` //
	PasswdQuestion string      `json:"passwdQuestion" orm:"passwd_question" ` //
	PasswdAnswer   string      `json:"passwdAnswer"   orm:"passwd_answer"   ` //
}
