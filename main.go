package main

import (
	"github.com/gogf/gf/v2/os/gctx"
	"github.com/wanganlin/goframe/bootstrap"
)

func main() {
	bootstrap.App.Run(gctx.New())
}
