package main

import (
	"github.com/juling/juling/internal/bootstrap"
	"log"
)

func main() {
	if err := bootstrap.Run(); err != nil {
		log.Fatalf("Failed to run server: %v", err)
	}
}
