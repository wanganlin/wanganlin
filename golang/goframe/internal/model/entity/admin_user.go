// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// AdminUser is the golang structure for table admin_user.
type AdminUser struct {
	UserId      uint   `json:"userId"      orm:"user_id"      ` //
	UserName    string `json:"userName"    orm:"user_name"    ` //
	Email       string `json:"email"       orm:"email"        ` //
	Password    string `json:"password"    orm:"password"     ` //
	EcSalt      string `json:"ecSalt"      orm:"ec_salt"      ` //
	AddTime     int    `json:"addTime"     orm:"add_time"     ` //
	LastLogin   int    `json:"lastLogin"   orm:"last_login"   ` //
	LastIp      string `json:"lastIp"      orm:"last_ip"      ` //
	ActionList  string `json:"actionList"  orm:"action_list"  ` //
	NavList     string `json:"navList"     orm:"nav_list"     ` //
	LangType    string `json:"langType"    orm:"lang_type"    ` //
	AgencyId    uint   `json:"agencyId"    orm:"agency_id"    ` //
	SuppliersId uint   `json:"suppliersId" orm:"suppliers_id" ` //
	Todolist    string `json:"todolist"    orm:"todolist"     ` //
	RoleId      int    `json:"roleId"      orm:"role_id"      ` //
}
