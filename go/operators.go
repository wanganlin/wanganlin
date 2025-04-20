package main

import "fmt"

func main() {
	// 算术运算符
	a, b := 10, 3
	fmt.Println("a + b =", a+b)
	fmt.Println("a - b =", a-b)
	fmt.Println("a * b =", a*b)
	fmt.Println("a / b =", a/b)
	fmt.Println("a % b =", a%b)
	a++
	fmt.Println("a++ =", a)
	b--
	fmt.Println("b-- =", b)

	// 关系运算符
	fmt.Println("a == b:", a == b)
	fmt.Println("a != b:", a != b)
	fmt.Println("a > b:", a > b)
	fmt.Println("a < b:", a < b)
	fmt.Println("a >= b:", a >= b)
	fmt.Println("a <= b:", a <= b)

	// 逻辑运算符
	x, y := true, false
	fmt.Println("x && y:", x && y)
	fmt.Println("x || y:", x || y)
	fmt.Println("!x:", !x)

	// 位运算符
	m, n := 5, 3
	fmt.Println("m & n:", m&n)   // AND
	fmt.Println("m | n:", m|n)   // OR
	fmt.Println("m ^ n:", m^n)   // XOR
	fmt.Println("m << 1:", m<<1) // 左移
	fmt.Println("m >> 1:", m>>1) // 右移

	// 赋值运算符
	var c int
	c = 10
	fmt.Println("c = 10:", c)
	c += 5
	fmt.Println("c += 5:", c)
	c -= 3
	fmt.Println("c -= 3:", c)
	c *= 2
	fmt.Println("c *= 2:", c)
	c /= 4
	fmt.Println("c /= 4:", c)
	c %= 3
	fmt.Println("c %= 3:", c)

	// 其他运算符
	ptr := &a
	fmt.Println("指针值:", *ptr)
	fmt.Println("指针地址:", ptr)
}
