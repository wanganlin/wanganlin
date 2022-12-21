# 变量定义

### 定义方式

- 使用 var 关键字

可以放在函数体内，或直接放在包内。

```
var a, b, c bool

var s2, s2 string = "hello", "world"
```

- 让编译器自动决定类型

```
var a, b, i, s1, s2 = true, false, 3, "hello", "world"
```

- 使用 := 定义变量

只能在函数体内使用。

```
a, b, i, s1, s2 := true, false, 3, "hello", "world"
```

### 包内部变量

```
package main

import (
	"fmt"
	"runtime"
)

var a1 = 3
var a2 = "kk"

// bb := "string.." 包内部变量不允许这样定义

var (
    g1 = 1
    g2 = "abc"
    g3 = true
)

func main() {
    fmt.Println(a1, a2)
    fmt.Println(g1, g2, g3)
    fmt.Println("hello world = " + runtime.GOARCH)
}

// 3 kk
// 1 abc true
// hello world = amd64
```

### 变量默认值

```
func variableZeroValue() {
    var a int
    var b string

    //fmt.Println(a, b)
    fmt.Printf("%d %q\n", a, b) // q
}
// 0 ""
```

### 变量赋初值

```
func variableInitialValue() {
    var a, b int = 3, 4
    var s string = "abc"

    fmt.Println(a, b, s)
}
// 3 4 abc
```

### 变量类型推断

```
func variableTypeDeduction() {
    var a, b, c = 1, "def", true
    fmt.Println(a, b, c)
}
// 1 def true
```

### 变量定义简写

```
func variableShorter() {
    a, b, c := 1, "asd", true
    fmt.Println(a, b, c)
}
// 1 asd true
```
