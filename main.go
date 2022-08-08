package main

import (
	"gincms/bootstrap"
)

func main() {
	if err := bootstrap.Run(); err != nil {
		return
	}
}
