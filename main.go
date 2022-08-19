package main

import (
	_ "github.com/wanganlin/goframe/app/service/logic"

	"github.com/gogf/gf/v2/os/gctx"
	"github.com/wanganlin/goframe/bootstrap"
)

func main() {
	bootstrap.App.Run(gctx.New())
}
