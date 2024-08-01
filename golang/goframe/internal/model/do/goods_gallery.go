// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package do

import (
	"github.com/gogf/gf/v2/frame/g"
)

// GoodsGallery is the golang structure of table goods_gallery for DAO operations like Where/Data.
type GoodsGallery struct {
	g.Meta      `orm:"table:goods_gallery, do:true"`
	ImgId       interface{} //
	GoodsId     interface{} //
	ImgUrl      interface{} //
	ImgDesc     interface{} //
	ThumbUrl    interface{} //
	ImgOriginal interface{} //
}
