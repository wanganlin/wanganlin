// =================================================================================
// This is auto-generated by GoFrame CLI tool only once. Fill this file as you wish.
// =================================================================================

package repository

import (
	"gitee.com/gosoft/gomall/internal/repository/internal"
)

// internalErrorLogDao is internal type for wrapping internal DAO implements.
type internalErrorLogDao = *internal.ErrorLogDao

// errorLogDao is the data access object for table error_log.
// You can define custom methods on it to extend its functionality as you wish.
type errorLogDao struct {
	internalErrorLogDao
}

var (
	// ErrorLog is globally public accessible object for table error_log operations.
	ErrorLog = errorLogDao{
		internal.NewErrorLogDao(),
	}
)

// Fill with you ideas below.
