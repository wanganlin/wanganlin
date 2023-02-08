package zhenai

import (
	"crawler/engine"
	"crawler/model"
	"io/ioutil"
	"testing"
)

func TestParseProfile(t *testing.T) {
	contents, err := ioutil.ReadFile("profile_data.html")
	if err != nil {
		panic(err)
	}

	result := ParseProfile(contents, "http://localhost:8080/mock/album.zhenai.com/u/8256018539338750764", "寂寞成影萌宝")
	if len(result.Items) != 1 {
		t.Errorf("Items should contain 1 element, but was %v", result.Items)
	}

	actual := result.Items[0]

	expected := engine.Item{
		Url: "http://localhost:8080/mock/album.zhenai.com/u/8256018539338750764",
		Id:  "8256018539338750764",
		Payload: model.Profile{
			Name:       "寂寞成影萌宝",
			Gender:     "女",
			Age:        83,
			Height:     "105CM",
			Weight:     "137KG",
			Income:     "财务自由",
			Marriage:   "离异",
			Education:  "本科",
			Occupation: "金融",
			Jiguan:     "南京市",
			Xingzuo:    "狮子座",
			House:      "无房",
			Car:        "无车",
		},
	}

	if actual != expected {
		t.Errorf("expected %v; but was %v", expected, actual)
	}

}
