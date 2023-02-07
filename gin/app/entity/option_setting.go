package entity

import (
	"time"
)

type OptionSetting struct {
	ID         uint      `gorm:"primarykey" json:"id"`
	Name       string    `json:"name"`
	Sort       string    `json:"sort"`
	ModelName  string    `json:"modelName"`
	CreateTime time.Time `json:"createTime"`
	UpdateTime time.Time `json:"updateTime"`
}
