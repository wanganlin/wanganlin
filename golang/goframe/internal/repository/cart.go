// =================================================================================
// This is auto-generated by GoFrame CLI tool only once. Fill this file as you wish.
// =================================================================================

package repository

import (
	"gitee.com/gosoft/gomall/internal/repository/internal"
)

// internalCartDao is internal type for wrapping internal DAO implements.
type internalCartDao = *internal.CartDao

// cartDao is the data access object for table cart.
// You can define custom methods on it to extend its functionality as you wish.
type cartDao struct {
	internalCartDao
}

var (
	// Cart is globally public accessible object for table cart operations.
	Cart = cartDao{
		internal.NewCartDao(),
	}
)

// Fill with you ideas below.
