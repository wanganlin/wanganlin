package route

import (
	"github.com/gin-gonic/gin"
	"github.com/juling/juling/internal/app/api/handler"
)

func Register(r *gin.Engine) {
	apiRoute := r.Group("/api")
	{
		apiRoute.GET("/", handler.IndexHandler.Health)

		// Articles API
		articleRoute := apiRoute.Group("/articles")
		{
			articleRoute.GET("/", handler.ArticleHandler.GetArticles)
			articleRoute.GET("/:id", handler.ArticleHandler.GetArticleByID)
			articleRoute.POST("/", handler.ArticleHandler.CreateArticle)
			articleRoute.PUT("/:id", handler.ArticleHandler.UpdateArticle)
			articleRoute.DELETE("/:id", handler.ArticleHandler.DeleteArticle)
		}
	}
}
