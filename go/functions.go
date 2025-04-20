package main

import "fmt"

// 无参数无返回值函数
func sayHello() {
	fmt.Println("Hello!")
}

// 带参数函数
func greet(name string) {
	fmt.Printf("Hello, %s!\n", name)
}

// 多返回值函数
func swap(x, y string) (string, string) {
	return y, x
}

// 命名返回值
func split(sum int) (x, y int) {
	x = sum * 4 / 9
	y = sum - x
	return
}

// 可变参数函数
func sum(nums ...int) int {
	total := 0
	for _, num := range nums {
		total += num
	}
	return total
}

// 函数作为参数
func apply(fn func(int) int, x int) int {
	return fn(x)
}

// 闭包
func adder() func(int) int {
	sum := 0
	return func(x int) int {
		sum += x
		return sum
	}
}

// 递归函数
func factorial(n int) int {
	if n == 0 {
		return 1
	}
	return n * factorial(n-1)
}

func main() {
	sayHello()
	greet("World")

	a, b := swap("hello", "world")
	fmt.Println(a, b)

	x, y := split(17)
	fmt.Println(x, y)

	fmt.Println("Sum:", sum(1, 2, 3))

	double := func(x int) int { return x * 2 }
	fmt.Println("Apply double:", apply(double, 5))

	pos, neg := adder(), adder()
	for i := 0; i < 5; i++ {
		fmt.Println(
			"Pos:", pos(i),
			"Neg:", neg(-2*i),
		)
	}

	fmt.Println("Factorial of 5:", factorial(5))
}
