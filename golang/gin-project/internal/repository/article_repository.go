package repository

import (
	"github.com/juling/juling/internal/model"
	"gorm.io/gorm"
)

type ArticleRepository struct {
	db *gorm.DB
}

func NewArticleRepository(db *gorm.DB) *ArticleRepository {
	return &ArticleRepository{db}
}

// GetAllArticles 获取所有文章
func GetAllArticles() []model.Article {
	return model.Articles
}

// GetArticleByID 根据 ID 获取文章
func GetArticleByID(id uint) *model.Article {
	for _, article := range model.Articles {
		if article.ID == id {
			return &article
		}
	}
	return nil
}

// CreateArticle 创建文章
func CreateArticle(article *model.Article) {
	article.ID = uint(len(model.Articles) + 1)
	model.Articles = append(model.Articles, *article)
}

// UpdateArticle 更新文章
func UpdateArticle(id uint, article *model.Article) {
	for i, a := range model.Articles {
		if a.ID == id {
			model.Articles[i] = *article
			return
		}
	}
}

// DeleteArticle 删除文章
func DeleteArticle(id uint) {
	for i, article := range model.Articles {
		if article.ID == id {
			model.Articles = append(model.Articles[:i], model.Articles[i+1:]...)
			return
		}
	}
}
