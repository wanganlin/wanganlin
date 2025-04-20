package main

import "fmt"

// 基本结构体
type Person struct {
	Name string
	Age  int
}

// 嵌套结构体
type Employee struct {
	Person
	JobTitle string
	Salary   float64
}

// 带方法的结构体
type Rectangle struct {
	Width, Height float64
}

func (r Rectangle) Area() float64 {
	return r.Width * r.Height
}

// 指针接收者方法
func (r *Rectangle) Scale(factor float64) {
	r.Width *= factor
	r.Height *= factor
}

// 结构体实现接口
type Shape interface {
	Area() float64
}

func main() {
	// 创建结构体实例
	p1 := Person{"Alice", 25}
	fmt.Println("Person:", p1)

	// 匿名结构体
	p2 := struct {
		Name string
		Age  int
	}{"Bob", 30}
	fmt.Println("Anonymous struct:", p2)

	// 嵌套结构体
	emp := Employee{
		Person:   Person{"Charlie", 35},
		JobTitle: "Developer",
		Salary:   50000,
	}
	fmt.Println("Employee:", emp)

	// 结构体方法
	rect := Rectangle{10, 20}
	fmt.Println("Rectangle area:", rect.Area())

	// 指针接收者方法
	rect.Scale(2)
	fmt.Println("Scaled rectangle area:", rect.Area())

	// 结构体实现接口
	var s Shape = Rectangle{5, 10}
	fmt.Println("Shape area:", s.Area())
}
