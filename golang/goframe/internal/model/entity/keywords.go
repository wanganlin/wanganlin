// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

import (
	"github.com/gogf/gf/v2/os/gtime"
)

// Keywords is the golang structure for table keywords.
type Keywords struct {
	Date         *gtime.Time `json:"date"         orm:"date"         ` //
	Searchengine string      `json:"searchengine" orm:"searchengine" ` //
	Keyword      string      `json:"keyword"      orm:"keyword"      ` //
	Count        uint        `json:"count"        orm:"count"        ` //
}
