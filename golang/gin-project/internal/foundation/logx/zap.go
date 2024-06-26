package logx

import (
	"go.uber.org/zap"
	"log"
)

type zapManager struct {
	logger *zap.Logger
}

var ZapManager = &zapManager{}

// New 日志构造
func (w *zapManager) New() *zap.Logger {
	config := zap.NewProductionConfig()
	config.OutputPaths = []string{
		"stdout",
		"logs/app.log",
	}

	logger, err := config.Build()
	if err != nil {
		log.Fatalf("Failed to initialize logger: %v", err)
	}

	return logger
}

func (w *zapManager) Write(p []byte) (n int, err error) {
	w.logger.Info(string(p))
	return len(p), nil
}
