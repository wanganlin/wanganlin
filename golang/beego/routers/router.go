package routers

import (
	"github.com/astaxie/beego"
	"github.com/citisoft/daosoft/controllers"
)

func init() {
	beego.Router("/", &controllers.MainController{})
	beego.Router("/login", &controllers.PassportController{}, "get:Login")
	beego.Router("/register", &controllers.PassportController{}, "get:Register")
	beego.Router("/password/reset", &controllers.PassportController{}, "get:Reset")
}
