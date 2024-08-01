// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

import (
	"github.com/gogf/gf/v2/os/gtime"
)

// Searchengine is the golang structure for table searchengine.
type Searchengine struct {
	Date         *gtime.Time `json:"date"         orm:"date"         ` //
	Searchengine string      `json:"searchengine" orm:"searchengine" ` //
	Count        uint        `json:"count"        orm:"count"        ` //
}
