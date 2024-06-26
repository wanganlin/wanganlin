// Code generated by gorm.io/gen. DO NOT EDIT.
// Code generated by gorm.io/gen. DO NOT EDIT.
// Code generated by gorm.io/gen. DO NOT EDIT.

package model

import (
	"time"
)

const TableNameArticle = "article"

// Article mapped from table <article>
type Article struct {
	ID          uint64    `gorm:"column:id;primaryKey;autoIncrement:true" json:"id"`
	Title       string    `gorm:"column:title;not null" json:"title"`
	Content     string    `gorm:"column:content" json:"content"`
	CreatedTime time.Time `gorm:"column:created_time;not null;comment:创建时间" json:"created_time"` // 创建时间
	UpdatedTime time.Time `gorm:"column:updated_time;comment:更新时间" json:"updated_time"`          // 更新时间
	DeletedTime time.Time `gorm:"column:deleted_time;comment:删除时间" json:"deleted_time"`          // 删除时间
}

// TableName Article's table name
func (*Article) TableName() string {
	return TableNameArticle
}
