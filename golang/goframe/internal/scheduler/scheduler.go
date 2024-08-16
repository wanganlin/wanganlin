package scheduler

import (
	"gitee.com/gosoft/gomall/internal/jobs"
	"github.com/gogf/gf/v2/os/gcron"
	"github.com/gogf/gf/v2/os/gctx"
)

var (
	ctx = gctx.New()
)

func Boot() {
	_, err := gcron.Add(ctx, "* * * * * *", jobs.Hello)
	if err != nil {
		return
	}
}
