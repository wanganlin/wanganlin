package service

import (
	"fmt"
	"testing"
)

func Test_upload_UploadFile(t *testing.T) {
	c := UploadService.UploadFile("C:\\Users\\Administrator\\Desktop\\oil460_1.xls", "curve")
	fmt.Println(c)
}

func Test_upload_getRequestUrl(t *testing.T) {

}

func Test_upload_getSign(t *testing.T) {

}
