// =================================================================================
// Code generated and maintained by GoFrame CLI tool. DO NOT EDIT.
// =================================================================================

package entity

// Article is the golang structure for table article.
type Article struct {
	ArticleId   uint   `json:"articleId"   orm:"article_id"   ` //
	CatId       int    `json:"catId"       orm:"cat_id"       ` //
	Title       string `json:"title"       orm:"title"        ` //
	Content     string `json:"content"     orm:"content"      ` //
	Author      string `json:"author"      orm:"author"       ` //
	AuthorEmail string `json:"authorEmail" orm:"author_email" ` //
	Keywords    string `json:"keywords"    orm:"keywords"     ` //
	ArticleType uint   `json:"articleType" orm:"article_type" ` //
	IsOpen      uint   `json:"isOpen"      orm:"is_open"      ` //
	AddTime     uint   `json:"addTime"     orm:"add_time"     ` //
	FileUrl     string `json:"fileUrl"     orm:"file_url"     ` //
	OpenType    uint   `json:"openType"    orm:"open_type"    ` //
	Link        string `json:"link"        orm:"link"         ` //
	Description string `json:"description" orm:"description"  ` //
}
