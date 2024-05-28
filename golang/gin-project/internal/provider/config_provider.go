package provider

import (
	"github.com/gin-gonic/gin"
)

type configProvider struct {
}

var ConfigProvider = &configProvider{}

func (a *configProvider) Boot(r *gin.Engine) {

}
