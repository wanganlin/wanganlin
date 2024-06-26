package support

type arr struct {
}

var Arr = &arr{}

func (a *arr) InArray() bool {
	return false
}
