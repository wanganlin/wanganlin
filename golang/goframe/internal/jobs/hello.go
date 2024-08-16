package jobs

import (
	"context"
	"github.com/gogf/gf/v2/frame/g"
	"github.com/gogf/gf/v2/os/gtime"
)

func Hello(ctx context.Context) {
	g.Log().Print(ctx, "Every second:"+gtime.Now().String())
}
