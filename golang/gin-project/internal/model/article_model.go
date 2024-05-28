package model

import (
	"github.com/juling/juling/internal/entity"
	"gorm.io/gorm"
	"time"
)

type articleModel struct {
	entity.ArticleEntity
}

var ArticleModel = &articleModel{}

func (a *articleModel) BeforeCreate(tx *gorm.DB) (err error) {
	a.CreatedAt = time.Now()
	a.UpdatedAt = time.Now()
	return nil
}

func (a *articleModel) BeforeUpdate(tx *gorm.DB) (err error) {
	a.UpdatedAt = time.Now()
	return nil
}
