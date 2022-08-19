package main

import (
	_ "github.com/gogf/gf/contrib/drivers/mysql/v2"
	_ "github.com/wanganlin/goframe/app/service/logic"

	"github.com/gogf/gf/v2/os/gctx"
	"github.com/wanganlin/goframe/bootstrap"
)

func main() {
	bootstrap.App.Run(gctx.New())
}
