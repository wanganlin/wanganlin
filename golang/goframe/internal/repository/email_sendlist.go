// =================================================================================
// This is auto-generated by GoFrame CLI tool only once. Fill this file as you wish.
// =================================================================================

package repository

import (
	"gitee.com/gosoft/gomall/internal/repository/internal"
)

// internalEmailSendlistDao is internal type for wrapping internal DAO implements.
type internalEmailSendlistDao = *internal.EmailSendlistDao

// emailSendlistDao is the data access object for table email_sendlist.
// You can define custom methods on it to extend its functionality as you wish.
type emailSendlistDao struct {
	internalEmailSendlistDao
}

var (
	// EmailSendlist is globally public accessible object for table email_sendlist operations.
	EmailSendlist = emailSendlistDao{
		internal.NewEmailSendlistDao(),
	}
)

// Fill with you ideas below.
