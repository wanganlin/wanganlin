package main

import (
	"log"

	. "github.com/juling/juling/internal/bootstrap"
)

func main() {
	if err := App.Run(":8080"); err != nil {
		log.Fatal(err)
	}
}
