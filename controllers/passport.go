package controllers

import "github.com/astaxie/beego"

type PassportController struct {
	beego.Controller
}

func (c *PassportController) Register() {
	c.TplName = "passport/register.html"
}

func (c *PassportController) Login() {
	c.TplName = "passport/login.html"
}

func (c *PassportController) Reset() {
	c.TplName = "passport/reset.html"
}
