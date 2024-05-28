package repository

import (
	"github.com/juling/juling/internal/entity"
	"gorm.io/gorm"
)

type ArticleRepository struct {
	db *gorm.DB
}

func NewArticleRepository(db *gorm.DB) *ArticleRepository {
	return &ArticleRepository{db}
}

// GetAllArticles 获取所有文章
func GetAllArticles() []entity.ArticleEntity {
	return nil
}

// GetArticleByID 根据 ID 获取文章
func GetArticleByID(id uint) *entity.ArticleEntity {
	return nil
}

// CreateArticle 创建文章
func CreateArticle(article *entity.ArticleEntity) {

}

// UpdateArticle 更新文章
func UpdateArticle(id uint, article *entity.ArticleEntity) {

}

// DeleteArticle 删除文章
func DeleteArticle(id uint) {

}
