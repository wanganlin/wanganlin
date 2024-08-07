// =================================================================================
// This is auto-generated by GoFrame CLI tool only once. Fill this file as you wish.
// =================================================================================

package repository

import (
	"gitee.com/gosoft/gomall/internal/repository/internal"
)

// internalGroupGoodsDao is internal type for wrapping internal DAO implements.
type internalGroupGoodsDao = *internal.GroupGoodsDao

// groupGoodsDao is the data access object for table group_goods.
// You can define custom methods on it to extend its functionality as you wish.
type groupGoodsDao struct {
	internalGroupGoodsDao
}

var (
	// GroupGoods is globally public accessible object for table group_goods operations.
	GroupGoods = groupGoodsDao{
		internal.NewGroupGoodsDao(),
	}
)

// Fill with you ideas below.
