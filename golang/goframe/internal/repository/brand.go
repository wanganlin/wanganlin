// =================================================================================
// This is auto-generated by GoFrame CLI tool only once. Fill this file as you wish.
// =================================================================================

package repository

import (
	"gitee.com/gosoft/gomall/internal/repository/internal"
)

// internalBrandDao is internal type for wrapping internal DAO implements.
type internalBrandDao = *internal.BrandDao

// brandDao is the data access object for table brand.
// You can define custom methods on it to extend its functionality as you wish.
type brandDao struct {
	internalBrandDao
}

var (
	// Brand is globally public accessible object for table brand operations.
	Brand = brandDao{
		internal.NewBrandDao(),
	}
)

// Fill with you ideas below.
