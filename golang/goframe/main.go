package main

import (
	_ "github.com/gogf/gf/contrib/drivers/mysql/v2"
	"github.com/gogf/gf/v2/os/gctx"
	. "gomall/internal/bootstrap"
	_ "gomall/internal/bundles"
)

func main() {
	Cmd.Run(gctx.New())
}
