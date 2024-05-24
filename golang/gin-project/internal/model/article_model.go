package model

import (
	"gorm.io/gorm"
	"time"
)

type Article struct {
	ID        uint      `gorm:"primaryKey" json:"id"`
	Title     string    `gorm:"not null" json:"title" validate:"required,min=5,max=100"`
	Content   string    `gorm:"not null" json:"content" validate:"required,min=10"`
	CreatedAt time.Time `json:"created_at"`
	UpdatedAt time.Time `json:"updated_at"`
}

func (a *Article) BeforeCreate(tx *gorm.DB) (err error) {
	a.CreatedAt = time.Now()
	a.UpdatedAt = time.Now()
	return nil
}

func (a *Article) BeforeUpdate(tx *gorm.DB) (err error) {
	a.UpdatedAt = time.Now()
	return nil
}

var Articles []Article // 模拟文章数据
