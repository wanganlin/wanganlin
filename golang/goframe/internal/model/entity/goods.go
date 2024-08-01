// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Goods is the golang structure for table goods.
type Goods struct {
	GoodsId          uint    `json:"goodsId"          orm:"goods_id"           ` //
	CatId            uint    `json:"catId"            orm:"cat_id"             ` //
	GoodsSn          string  `json:"goodsSn"          orm:"goods_sn"           ` //
	GoodsName        string  `json:"goodsName"        orm:"goods_name"         ` //
	GoodsNameStyle   string  `json:"goodsNameStyle"   orm:"goods_name_style"   ` //
	ClickCount       uint    `json:"clickCount"       orm:"click_count"        ` //
	BrandId          uint    `json:"brandId"          orm:"brand_id"           ` //
	ProviderName     string  `json:"providerName"     orm:"provider_name"      ` //
	GoodsNumber      uint    `json:"goodsNumber"      orm:"goods_number"       ` //
	GoodsWeight      float64 `json:"goodsWeight"      orm:"goods_weight"       ` //
	MarketPrice      float64 `json:"marketPrice"      orm:"market_price"       ` //
	ShopPrice        float64 `json:"shopPrice"        orm:"shop_price"         ` //
	PromotePrice     float64 `json:"promotePrice"     orm:"promote_price"      ` //
	PromoteStartDate uint    `json:"promoteStartDate" orm:"promote_start_date" ` //
	PromoteEndDate   uint    `json:"promoteEndDate"   orm:"promote_end_date"   ` //
	WarnNumber       uint    `json:"warnNumber"       orm:"warn_number"        ` //
	Keywords         string  `json:"keywords"         orm:"keywords"           ` //
	GoodsBrief       string  `json:"goodsBrief"       orm:"goods_brief"        ` //
	GoodsDesc        string  `json:"goodsDesc"        orm:"goods_desc"         ` //
	GoodsThumb       string  `json:"goodsThumb"       orm:"goods_thumb"        ` //
	GoodsImg         string  `json:"goodsImg"         orm:"goods_img"          ` //
	OriginalImg      string  `json:"originalImg"      orm:"original_img"       ` //
	IsReal           uint    `json:"isReal"           orm:"is_real"            ` //
	ExtensionCode    string  `json:"extensionCode"    orm:"extension_code"     ` //
	IsOnSale         uint    `json:"isOnSale"         orm:"is_on_sale"         ` //
	IsAloneSale      uint    `json:"isAloneSale"      orm:"is_alone_sale"      ` //
	IsShipping       uint    `json:"isShipping"       orm:"is_shipping"        ` //
	Integral         uint    `json:"integral"         orm:"integral"           ` //
	AddTime          uint    `json:"addTime"          orm:"add_time"           ` //
	SortOrder        uint    `json:"sortOrder"        orm:"sort_order"         ` //
	IsDelete         uint    `json:"isDelete"         orm:"is_delete"          ` //
	IsBest           uint    `json:"isBest"           orm:"is_best"            ` //
	IsNew            uint    `json:"isNew"            orm:"is_new"             ` //
	IsHot            uint    `json:"isHot"            orm:"is_hot"             ` //
	IsPromote        uint    `json:"isPromote"        orm:"is_promote"         ` //
	BonusTypeId      uint    `json:"bonusTypeId"      orm:"bonus_type_id"      ` //
	LastUpdate       uint    `json:"lastUpdate"       orm:"last_update"        ` //
	GoodsType        uint    `json:"goodsType"        orm:"goods_type"         ` //
	SellerNote       string  `json:"sellerNote"       orm:"seller_note"        ` //
	GiveIntegral     int     `json:"giveIntegral"     orm:"give_integral"      ` //
	RankIntegral     int     `json:"rankIntegral"     orm:"rank_integral"      ` //
	SuppliersId      uint    `json:"suppliersId"      orm:"suppliers_id"       ` //
	IsCheck          uint    `json:"isCheck"          orm:"is_check"           ` //
}
