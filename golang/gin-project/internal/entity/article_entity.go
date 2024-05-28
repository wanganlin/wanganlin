package entity

import "time"

type ArticleEntity struct {
	ID        uint      `gorm:"primaryKey" json:"id"`
	Title     string    `gorm:"not null" json:"title" validate:"required,min=5,max=100"`
	Content   string    `gorm:"not null" json:"content" validate:"required,min=10"`
	CreatedAt time.Time `json:"created_at"`
	UpdatedAt time.Time `json:"updated_at"`
}
