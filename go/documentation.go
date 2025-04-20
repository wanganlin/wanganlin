package main

import "fmt"

// Greet 是一个简单的问候函数
// 它接受一个名字参数并返回问候语
func Greet(name string) string {
	return fmt.Sprintf("Hello, %s!", name)
}

/*
Person 结构体表示一个人
包含姓名和年龄信息
*/
type Person struct {
	Name string // 姓名
	Age  int    // 年龄
}

/*
Calculate 执行一些计算

参数:

	a - 第一个数字
	b - 第二个数字

返回:

	计算结果
	错误信息
*/
func Calculate(a, b int) (int, error) {
	if b == 0 {
		return 0, fmt.Errorf("除数不能为零")
	}
	return a / b, nil
}

/*
示例函数展示如何使用Greet函数

示例:

	r := Greet("World")
	fmt.Println(r) // 输出: Hello, World!
*/
func ExampleGreet() {
	fmt.Println(Greet("World"))
	// Output: Hello, World!
}

// main 是程序入口
func main() {
	fmt.Println(Greet("Go"))

	p := Person{"Alice", 30}
	fmt.Printf("%+v\n", p)

	result, err := Calculate(10, 2)
	if err != nil {
		fmt.Println("Error:", err)
	} else {
		fmt.Println("Result:", result)
	}
}
