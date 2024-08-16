package guid

import "github.com/gogf/gf/v2/util/guid"

func ID(data ...[]byte) string {
	return guid.S(data...)
}
