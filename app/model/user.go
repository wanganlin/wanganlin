package model

type UserGetProfileOutput struct {
	Id       uint           // 用户ID
	Nickname string         // 昵称
	Avatar   string         // 头像地址
	Gender   int            // 性别 0: 未设置 1: 男 2: 女
	Stats    map[string]int // 发布内容数量
}
