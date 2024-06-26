package logx

type slsManager struct {
}

var SlsManager = &slsManager{}

// New 日志构造
func (w *slsManager) New() {
	return
}

func (w *slsManager) Write(p []byte) (n int, err error) {

	return len(p), nil
}
