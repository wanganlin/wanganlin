package scheduler

import (
	"github.com/gogf/gf/v2/os/gcron"
	"github.com/gogf/gf/v2/os/gctx"
	"gomall/internal/jobs"
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
