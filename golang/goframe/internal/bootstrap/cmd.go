package bootstrap

import (
	"context"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/os/gcmd"
	"gomall/internal/provider"
)

var (
	Cmd = gcmd.Command{
		Name:  "main",
		Usage: "main",
		Brief: "start http server",
		Func: func(ctx context.Context, parser *gcmd.Parser) (err error) {
			app := g.Server()
			provider.Register(app)
			app.Run()
			return nil
		},
	}
)
