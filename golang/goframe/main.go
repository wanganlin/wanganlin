package main

import (
	. "gitee.com/gosoft/gomall/bootstrap"
	_ "gitee.com/gosoft/gomall/internal/service/logic"
	_ "github.com/gogf/gf/contrib/drivers/mysql/v2"
	"github.com/gogf/gf/v2/os/gctx"
)

func main() {
	Cmd.Run(gctx.New())
}
