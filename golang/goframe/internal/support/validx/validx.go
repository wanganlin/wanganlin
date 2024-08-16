package validx

import (
	"fmt"
	"regexp"
)

func Email(email string) bool {
	emailRegex := `^[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$`
	matched, err := regexp.MatchString(emailRegex, email)
	if err != nil {
		fmt.Println("Error matching regex:", err)
		return false
	}
	return matched
}

func Mobile(mobile string) bool {
	mobileRegex := `^1[3-9]\d{9}$`
	matched, err := regexp.MatchString(mobileRegex, mobile)
	if err != nil {
		fmt.Println("Error matching regex:", err)
		return false
	}
	return matched
}
