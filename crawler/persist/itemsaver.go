package persist

import (
	"context"
	"crawler/engine"
	"log"

	"github.com/olivere/elastic/v7"
)

func ItemSaver(index string) (chan engine.Item, error) {
	client, err := elastic.NewClient(elastic.SetSniff(false))
	if err != nil {
		return nil, err
	}

	out := make(chan engine.Item)

	go func() {
		for {
			itemCount := 0
			for {
				item := <-out
				log.Printf("Item saver #%d: %v", itemCount, item)
				itemCount++

				err := save(client, index, item)
				if err != nil {
					log.Printf("Item saver error: saving item %v: %v", item, err)
				}
			}
		}
	}()

	return out, nil
}

func save(client *elastic.Client, index string, item engine.Item) error {
	elastic := client.Index().Index(index)

	if item.Id != "" {
		elastic.Id(item.Id)
	}

	_, err := elastic.BodyJson(item).Do(context.Background())
	if err != nil {
		return err
	}

	return nil
}
