package enums

type Status int

var (
	StatusNormal Status = 1
)

func (a Status) Code() int {
	switch a {
	case StatusNormal:
		return 1
	default:
		return 0
	}
}

func (a Status) String() string {
	switch a {
	case StatusNormal:
		return "正常"
	default:
		return "未知"
	}
}
