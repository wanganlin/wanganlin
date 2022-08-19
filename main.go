package main

import (
	_ "github.com/wanganlin/goframe/internal/logic"

	"github.com/gogf/gf/v2/os/gctx"
	"github.com/wanganlin/goframe/bootstrap"
)

func main() {
	bootstrap.App.Run(gctx.New())
}
