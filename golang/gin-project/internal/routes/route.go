package routes

import (
	"github.com/gin-gonic/gin"
	api "github.com/juling/juling/internal/api/handler"
	manager "github.com/juling/juling/internal/manager/handler"
	portal "github.com/juling/juling/internal/portal/handler"
)

func Register(r *gin.Engine) {
	adminRoute(r)
	portalRoute(r)
	apiRoute(r)
}

func adminRoute(r *gin.Engine) {
	r.GET("/admin", manager.IndexController.Index)
}

func portalRoute(r *gin.Engine) {
	r.GET("/", portal.IndexController.Index)
}

func apiRoute(r *gin.Engine) {
	r.GET("/ping", func(c *gin.Context) {
		c.JSON(200, gin.H{"message": "pong"})
	})

	// Articles API
	articlesAPI := r.Group("/articles")
	{
		articlesAPI.GET("/", api.ArticleHandler.GetArticlesHandler)
		articlesAPI.GET("/:id", api.ArticleHandler.GetArticleByIDHandler)
		articlesAPI.POST("/", api.ArticleHandler.CreateArticleHandler)
		articlesAPI.PUT("/:id", api.ArticleHandler.UpdateArticleHandler)
		articlesAPI.DELETE("/:id", api.ArticleHandler.DeleteArticleHandler)
	}
}
