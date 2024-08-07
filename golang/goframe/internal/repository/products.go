// =================================================================================
// This is auto-generated by GoFrame CLI tool only once. Fill this file as you wish.
// =================================================================================

package repository

import (
	"gitee.com/gosoft/gomall/internal/repository/internal"
)

// internalProductsDao is internal type for wrapping internal DAO implements.
type internalProductsDao = *internal.ProductsDao

// productsDao is the data access object for table products.
// You can define custom methods on it to extend its functionality as you wish.
type productsDao struct {
	internalProductsDao
}

var (
	// Products is globally public accessible object for table products operations.
	Products = productsDao{
		internal.NewProductsDao(),
	}
)

// Fill with you ideas below.
