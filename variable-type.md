# 内建变量类型

```
bool, string
(u)int, (u)int8, (u)int16, (u)int32, (u)int64, uintptr
byte, rune
float32, float64, complex64, complex128
```
- bool：布尔类型
- string：字符串类型
- int：整型类型
- uintptr：指针类型，长度根据操作系统决定
- byte：字节，8位
- rune：同char，32位
- complex：复数（实数&虚数）

### 复数

```go
package main

import (
    "fmt"
    "math"
    "math/cmplx"
)

func main() {
    c := 3 + 4i
    fmt.Println(cmplx.Abs(c))
    fmt.Println(cmplx.Pow(math.E, 1i*math.Pi))
    fmt.Println(cmplx.Exp(1i * math.Pi))
}
```