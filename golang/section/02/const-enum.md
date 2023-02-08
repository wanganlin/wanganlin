# 常量和枚举

### 常量

常量的定义可以不遵循其他编程语言的大写惯例，在 `Go` 的设计中大小写有着特殊的意义。

常量的数值可以作为各种类型使用，不过约定常量的类型除外。

```go
const filename = "aa.php"
func defConst() {
    // const a, b int = 2, 4
    const a, b = 2, 4
    const c int
	// 常量只是字符的替换，所以不涉及类型的转换
	c = int(math.Sqrt(a*a, b*b))
    fmt.Println(c)
}
```

### 枚举

```go
func enums() {
	const (
		cpp = 1
		java = 2
		golang = 3
		php = 4
    )
	
    const (
        cpp2 = iota // 从 0 开始计数
        java2
        golang2
        php2
    )
	
	// b, kb, mb, gb, tb, pb
	const (
		b = 1 << (10 * iota) // 自增值的种子
		kb
		mb
		gb
		tb
		pb
    )

    fmt.Println(cpp, java, golang, php)
    fmt.Println(cpp2, java2, golang2, php2)
    fmt.Println(b, kb, mb, gb, tb, pb)
}
```
