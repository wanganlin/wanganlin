package model

type User struct {
	Name   string `json:"name"`
	Avatar string `json:"avatar"`
}

type UserLogin struct {
	Passport string `json:"passport"` // support: username, mobile, email
	Password string `json:"password"`
	Remember bool   `json:"remember"`
}

type UserSmsCodeLogin struct {
	Mobile   string `json:"mobile"`
	SmsCode  string `json:"smsCode"`
	Remember bool   `json:"remember"`
}
