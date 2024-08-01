// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// PackageGoods is the golang structure for table package_goods.
type PackageGoods struct {
	PackageId   uint `json:"packageId"   orm:"package_id"   ` //
	GoodsId     uint `json:"goodsId"     orm:"goods_id"     ` //
	ProductId   uint `json:"productId"   orm:"product_id"   ` //
	GoodsNumber uint `json:"goodsNumber" orm:"goods_number" ` //
	AdminId     uint `json:"adminId"     orm:"admin_id"     ` //
}
