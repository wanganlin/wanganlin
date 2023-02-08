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
	fmt.Printf("%.3f", cmplx.Exp(1i * math.Pi))
}
```

### 强制类型转换

类型的转换都是强制的，没有其他编程语言的隐式转换。

```go
func triangle() {
	var a, b int = 2, 4
	var c int
	// c = math.Sqrt(a*a, b*b) // 类型不允许
	c = int(math.Sqrt(float64(a*a, b*b)))
    fmt.Println(c)
}
```

### 知识延展

计算机是二进制的。浮点数没有办法是用二进制进行精确表示。我们的CPU表示浮点数由两个部分组成：指数和尾数，这样的表示方法一般都会失去一定的精确度，有些浮点数运算也会产生一定的误差。

比如Java的float只能用来进行科学计算或工程计算，在大多数的商业计算中，一般采用java.math.BigDecimal类来进行精确计算。

通常的解决办法

- 如果业务不是必须非常精确的要求可以采取四舍五入的方法来忽略这个问题。
- 转成整型再进行计算。
- 使用 BCD 码存储和运算二进制小数
- 调用 decimal 包 https://github.com/shopspring/decimal
