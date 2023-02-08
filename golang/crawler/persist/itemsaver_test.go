package persist

import (
	"context"
	"crawler/engine"
	"crawler/model"
	"encoding/json"
	"testing"

	"github.com/olivere/elastic/v7"
)

func Test_save(t *testing.T) {
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

	// Fetch expected item
	client, err := elastic.NewClient(elastic.SetSniff(false))
	if err != nil {
		panic(err)
	}

	// Save expected item
	index := "dating_test"
	err = save(client, index, expected)
	if err != nil {
		panic(err)
	}

	resp, err := client.Get().Index(index).Id(expected.Id).Do(context.Background())
	if err != nil {
		panic(err)
	}

	t.Logf("%s", resp.Source)

	var actual engine.Item
	err = json.Unmarshal(resp.Source, &actual)
	if err != nil {
		panic(err)
	}

	actualProfile, _ := model.FromJsonObject(actual.Payload)
	actual.Payload = actualProfile

	if expected != actual {
		t.Errorf("expected %v; but was %v", expected, actual)
	}
}
