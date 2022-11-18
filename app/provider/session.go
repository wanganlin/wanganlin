package provider

import (
	"github.com/flamego/flamego"
	"github.com/flamego/session"
	"os"
	"path/filepath"
)

func Session(f *flamego.Flame) {
	f.Use(session.Sessioner(session.Options{
		Initer: session.FileIniter(),
		Config: session.FileConfig{
			RootDir: filepath.Join(os.TempDir(), "sessions"),
		},
	}))
}
