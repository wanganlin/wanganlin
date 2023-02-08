package controller

import (
	"encoding/json"
	"github.com/gogf/gf/frame/g"
	"github.com/gogf/gf/net/ghttp"
	"limsctl/response"
	"limsctl/service"
)

var SettingController = &setting{}
var resp response.ApiResponse

type setting struct{}

// Get 获取配置信息
func (a *setting) Get(r *ghttp.Request) {
	config := service.ConfigService.GetConfig()
	response.JsonExit(r, 0, "ok", config)
}

// Update 更新配置信息
func (a *setting) Update(r *ghttp.Request) {
	code := r.GetString("companyCode", "")
	device := r.GetString("deviceType", "")
	number := r.GetString("deviceNumber", "")
	api := r.GetString("storageApi", "")
	key := r.GetString("storageApiKey", "")

	if err := service.ConfigService.WriteConfig(code, device, number, api, key); err != nil {
		response.JsonExit(r, 1, "fail")
	} else {
		response.JsonExit(r, 0, "ok")
	}
}

// Companies 返回全部实验室列表
func (a *setting) Companies(r *ghttp.Request) {
	// 仪器设备配置信息
	storageApi := g.Cfg().GetString("storageApi")
	url := storageApi + "/companies"

	c, err := g.Client().Get(url)
	defer c.Close()

	if err != nil {
		response.JsonExit(r, 1, "fail", []int{})
	}

	if err2 := json.Unmarshal(c.ReadAll(), &resp); err2 != nil {
		g.Log().Errorf("响应解析 JSON 失败，%s", err2)
	} else {
		if resp.Code != 200 {
			g.Log().Errorf("接口响应错误，%s", resp)
			response.JsonExit(r, 1, "fail", []int{})
		}
	}

	response.JsonExit(r, 0, "ok", resp.Result)
}

// Devices 返回实验室设备列表
func (a *setting) Devices(r *ghttp.Request) {
	// 仪器设备配置信息
	storageApi := g.Cfg().GetString("storageApi")

	url := storageApi + "/devices?company=" + r.GetString("company", "")

	c, err := g.Client().Get(url)
	defer c.Close()

	if err != nil {
		response.JsonExit(r, 1, "fail", []int{})
	}

	if err2 := json.Unmarshal(c.ReadAll(), &resp); err2 != nil {
		g.Log().Errorf("响应解析 JSON 失败，%s", err2)
	} else {
		if resp.Code != 200 {
			g.Log().Errorf("接口响应错误，%s", resp)
			response.JsonExit(r, 1, "fail", []int{})
		}
	}

	response.JsonExit(r, 0, "ok", resp.Result)
}
