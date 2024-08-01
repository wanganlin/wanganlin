// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Crons is the golang structure for table crons.
type Crons struct {
	CronId     uint   `json:"cronId"     orm:"cron_id"     ` //
	CronCode   string `json:"cronCode"   orm:"cron_code"   ` //
	CronName   string `json:"cronName"   orm:"cron_name"   ` //
	CronDesc   string `json:"cronDesc"   orm:"cron_desc"   ` //
	CronOrder  uint   `json:"cronOrder"  orm:"cron_order"  ` //
	CronConfig string `json:"cronConfig" orm:"cron_config" ` //
	Thistime   int    `json:"thistime"   orm:"thistime"    ` //
	Nextime    int    `json:"nextime"    orm:"nextime"     ` //
	Day        int    `json:"day"        orm:"day"         ` //
	Week       string `json:"week"       orm:"week"        ` //
	Hour       string `json:"hour"       orm:"hour"        ` //
	Minute     string `json:"minute"     orm:"minute"      ` //
	Enable     int    `json:"enable"     orm:"enable"      ` //
	RunOnce    int    `json:"runOnce"    orm:"run_once"    ` //
	AllowIp    string `json:"allowIp"    orm:"allow_ip"    ` //
	AlowFiles  string `json:"alowFiles"  orm:"alow_files"  ` //
}
