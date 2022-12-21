# 变量定义

### 使用 var 关键字

```
var a, b, c bool

var s2, s2 string = "hello", "world"
```

可以放在函数提内，或直接放在包内。

### 让编译器自动决定类型

```
var a, b, i, s1, s2 = true, false, 3, "hello", "world"
```

### 使用 := 定义变量

```
a, b, i, s1, s2 := true, false, 3, "hello", "world"
```

只能在函数内使用。
