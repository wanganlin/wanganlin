# 正则

```go
package main

import (
	"fmt"
	"regexp"
)

var text = `
my email is 1a@aa.com
my email is aa@bb.org
my email is aa@qq.com
my email is aa@cc.com.cn
`

func main() {
	// compile := regexp.MustCompile(" .+@.*\\..+")
	compile := regexp.MustCompile(`[a-zA-Z0-9]+@[a-zA-Z0-9.]+\.[a-zA-Z0-9]+`)
	match1 := compile.FindString(text)
	fmt.Println(match1)

	compile2 := regexp.MustCompile(`[a-zA-Z0-9]+@[a-zA-Z0-9.]+\.[a-zA-Z0-9]+`)
	match2 := compile2.FindAllString(text, -1)
	fmt.Println(match2)

	compile3 := regexp.MustCompile(`([a-zA-Z0-9]+)@([a-zA-Z0-9]+)(\.[a-zA-Z0-9.]+)`)
	match3 := compile3.FindAllStringSubmatch(text, -1)
	for _, m := range match3 {
		fmt.Println(m)
	}
}

```