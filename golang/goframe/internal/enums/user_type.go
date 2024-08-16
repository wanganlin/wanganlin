package enums

type UserType string

var (
	UserTypeAdmin  UserType = "admin"
	UserTypeSeller UserType = "seller"
	UserTypeBuyer  UserType = "buyer"
)

func (a UserType) String() string {
	switch a {
	case UserTypeAdmin:
		return "管理员"
	case UserTypeSeller:
		return "卖家"
	case UserTypeBuyer:
		return "买家"
	default:
		return "未知"
	}
}
