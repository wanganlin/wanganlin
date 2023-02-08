package provider

import (
	"github.com/flamego/cache"
	"github.com/flamego/flamego"
	"os"
	"path/filepath"
)

func Cache(f *flamego.Flame) {
	f.Use(cache.Cacher(cache.Options{
		Initer: cache.FileIniter(),
		Config: cache.FileConfig{
			RootDir: filepath.Join(os.TempDir(), "cache"),
		},
	}))
}
