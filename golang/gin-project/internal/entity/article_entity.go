package entity

type ArticleEntity struct {
	Title   string `gorm:"not null" json:"title" validate:"required,min=5,max=100"`
	Content string `gorm:"not null" json:"content" validate:"required,min=10"`
}
