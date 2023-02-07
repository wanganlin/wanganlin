package entity

import "gorm.io/gorm"

type UserAuth struct {
	gorm.Model
	UserId   uint
	Passport string
	Password string
}
