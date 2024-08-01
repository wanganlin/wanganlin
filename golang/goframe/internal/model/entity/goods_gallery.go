// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// GoodsGallery is the golang structure for table goods_gallery.
type GoodsGallery struct {
	ImgId       uint   `json:"imgId"       orm:"img_id"       ` //
	GoodsId     uint   `json:"goodsId"     orm:"goods_id"     ` //
	ImgUrl      string `json:"imgUrl"      orm:"img_url"      ` //
	ImgDesc     string `json:"imgDesc"     orm:"img_desc"     ` //
	ThumbUrl    string `json:"thumbUrl"    orm:"thumb_url"    ` //
	ImgOriginal string `json:"imgOriginal" orm:"img_original" ` //
}
