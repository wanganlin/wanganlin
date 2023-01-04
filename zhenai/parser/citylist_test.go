package parser

import (
	"io/ioutil"
	"testing"
)

func TestParserCityList(t *testing.T) {
	contents, err := ioutil.ReadFile("citylist_test_data.html")
	if err != nil {
		panic(err)
	}

	result := ParserCityList(contents)

	const resultCount = 470
	if len(result.Requests) != resultCount {
		t.Errorf("result error")
	}
}
