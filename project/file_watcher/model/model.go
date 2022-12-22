package model

import "gorm.io/gorm"

var DB *gorm.DB

type File struct {
	gorm.Model
	Name         string `json:"name"`
	Path         string `json:"path"`
	Status       uint   `json:"status"`
	ErrorCounter uint   `json:"error_counter"`
}
