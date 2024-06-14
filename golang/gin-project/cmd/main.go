package main

import (
	"log"

	. "github.com/juling/juling/internal/bootstrap"
)

func main() {
	if err := App.Run(); err != nil {
		log.Fatalf("Failed to run server: %v", err)
	}
}
