package handler

import (
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/entity"
	"github.com/juling/juling/internal/repository"
	"net/http"
	"strconv"
)

var ArticleHandler = &articleHandler{}

type articleHandler struct {
}

// GetArticles 获取所有文章
func (h *articleHandler) GetArticles(c *gin.Context) {
	articles := repository.GetAllArticles()
	c.JSON(http.StatusOK, articles)
}

// GetArticleByID 根据 ID 获取文章
func (h *articleHandler) GetArticleByID(c *gin.Context) {
	id, _ := strconv.ParseUint(c.Param("id"), 10, 64)
	article := repository.GetArticleByID(uint(id))
	if article == nil {
		c.JSON(http.StatusNotFound, gin.H{"error": "Article not found"})
		return
	}
	c.JSON(http.StatusOK, article)
}

// CreateArticle 创建文章
func (h *articleHandler) CreateArticle(c *gin.Context) {
	var article entity.ArticleEntity
	if err := c.BindJSON(&article); err != nil {
		c.JSON(http.StatusBadRequest, gin.H{"error": err.Error()})
		return
	}
	repository.CreateArticle(&article)
	c.JSON(http.StatusCreated, article)
}

// UpdateArticle 更新文章
func (h *articleHandler) UpdateArticle(c *gin.Context) {
	id, _ := strconv.ParseUint(c.Param("id"), 10, 64)
	var article entity.ArticleEntity
	if err := c.BindJSON(&article); err != nil {
		c.JSON(http.StatusBadRequest, gin.H{"error": err.Error()})
		return
	}
	repository.UpdateArticle(uint(id), &article)
	c.JSON(http.StatusOK, article)
}

// DeleteArticle 删除文章
func (h *articleHandler) DeleteArticle(c *gin.Context) {
	id, _ := strconv.ParseUint(c.Param("id"), 10, 64)
	repository.DeleteArticle(uint(id))
	c.JSON(http.StatusOK, gin.H{"message": "Article deleted"})
}
