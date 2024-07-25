package bootstrap

import (
	"context"
	"gitee.com/gosoft/gomall/internal/provider"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/os/gcmd"
)

var (
	App = gcmd.Command{
		Name:  "main",
		Usage: "main",
		Brief: "start http server",
		Func: func(ctx context.Context, parser *gcmd.Parser) (err error) {
			s := g.Server()
			provider.Register(s)
			s.Run()
			return nil
		},
	}
)
