package v1

import "github.com/gogf/gf/v2/frame/g"

type (
	AddressQueryReq struct {
		g.Meta `path:"/address/query" tags:"买家模块" method:"post" summary:"查询收货地址列表"`
	}

	AddressQueryRes struct {
		g.Meta `mime:"application/json"`
	}
)

type (
	AddressCreateReq struct {
		g.Meta `path:"/address/store" tags:"买家模块" method:"post" summary:"新增收货地址"`
	}

	AddressCreateRes struct {
		g.Meta `mime:"application/json"`
	}
)
type (
	AddressShowReq struct {
		g.Meta `path:"/address/show" tags:"买家模块" method:"get" summary:"显示收货地址详情"`
	}

	AddressShowRes struct {
		g.Meta `mime:"application/json"`
	}
)

type (
	AddressUpdateReq struct {
		g.Meta `path:"/address/update" tags:"买家模块" method:"post" summary:"更新收货地址"`
	}

	AddressUpdateRes struct {
		g.Meta `mime:"application/json"`
	}
)

type (
	AddressDeleteReq struct {
		g.Meta `path:"/address/destroy" tags:"买家模块" method:"post" summary:"删除收货地址"`
	}

	AddressDeleteRes struct {
		g.Meta `mime:"application/json"`
	}
)
