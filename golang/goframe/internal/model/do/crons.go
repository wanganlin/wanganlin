// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// Crons is the golang structure of table crons for DAO operations like Where/Data.
type Crons struct {
	g.Meta     `orm:"table:crons, do:true"`
	CronId     interface{} //
	CronCode   interface{} //
	CronName   interface{} //
	CronDesc   interface{} //
	CronOrder  interface{} //
	CronConfig interface{} //
	Thistime   interface{} //
	Nextime    interface{} //
	Day        interface{} //
	Week       interface{} //
	Hour       interface{} //
	Minute     interface{} //
	Enable     interface{} //
	RunOnce    interface{} //
	AllowIp    interface{} //
	AlowFiles  interface{} //
}
