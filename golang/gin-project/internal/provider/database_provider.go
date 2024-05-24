package provider

import (
	"github.com/gin-gonic/gin"
)

type databaseProvider struct {
}

var DatabaseProvider = &databaseProvider{}

func (a *databaseProvider) Boot(r *gin.Engine) {
}
